<?php
include '../src/templates/headSecond.php';
?>

<body>
    <?php
    include '../src/templates/navBar.php';
    ?>
    <?php

    include '../src/database/conexao.php';

    $produto = $_POST;

    if (!empty($produto)) :
        header('Location: /src/pages/productsPage.php');
        $produtoNome = $produto['productName'];

        $produtoDescricao = $produto['productDescription'];

        $row = $produto['productPrice'];

        $produtoPreco = floatval($row);
        $produtoImg = $_FILES['productImg']['tmp_name'];

        if ($produtoImg) {
            $produtoImgFile = base64_encode(file_get_contents($produtoImg));
        } else {
            $produtoImgFile = null;
        }
    endif;

    $sql = "INSERT INTO produtos (nome, descricao, preco, img) 
            VALUES ('$produtoNome', '$produtoDescricao', '$produtoPreco', '$produtoImgFile')";

    if (!$mysqli->query($sql)) :
        echo $mysqli->error;
    endif;

    ?>

    <?php

    $sql = "SELECT nome, id, descricao, preco, img FROM produtos";
    $result = $mysqli->query($sql) or die(' Erro na requisição ');

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <div class="col-lg-6">
                <div class="card w-100">
                    <div class="card-header bg-blue">
                        <h4 class="mb-0 text-white fs-1 fw-bold"><?= $row['nome'] ?></h4>
                    </div>
                    <div class="card-body">
                        <span><?= $row['descricao'] ?></span><br />
                        <span>R$ <?= $row['preco'] ?></span><br />
                        <img src="data:image/png;base64,<?= $row['img'] ?>" alt="" style="width:300px">
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    $mysqli->close();
    ?>


    <script src="../src/assets/libs/jquery/jquery.min.js"></script>
    <script src=../src/assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../src/js/products-page.js"></script>
</body>
<?php
include '../src/templates/footer.php';
