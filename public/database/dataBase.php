<?php
include '../templates/headSecond.php';
?>

<body>
    <?php
    include '../templates/navBar.php';
    ?>
    <pre>
    <?php

    include '../database/conexao.php';

    $produto = $_POST;

    if ($produto) {
        $produtoNome = $produto['productName'];
        $produtoDescricao = $produto['productDescription'];
        $row = $produto['productPrice'];
        $produtoPreco = floatval($row);
        $produtoImg = $_FILES['productImg']['tmp_name'];

        // pegar imagem e converter pra base64
        if ($produtoImg) {
            $produtoImgBase64 = base64_encode(file_get_contents($produtoImg));
        } else {
            $produtoImgBase64 = 0;
        }
    }

    $sql = "INSERT INTO produtos (nome, descricao, preco, img) 
            VALUES ('$produtoNome', '$produtoDescricao', '$produtoPreco', '$produtoImgBase64')";

    if (!$mysqli->query($sql)) :
        echo $mysqli->error;
    endif;

    $mysqli->close();
    ?>
    </pre>

    <?php

    $query = $mysqli->query("SELECT nome, id, descricao, preco, img FROM produtos");

    // executa a query
    $dados = mysqli_query($mysqli, $query) or die(' Erro na requisição ');

    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);

    // calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);

    // se o número de resultados for maior que zero, mostra os dados
    if ($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
    ?>
            <div class="col-lg-4">
                <div class="card w-100">
                    <div class="card-header bg-blue">
                        <h4 class="mb-0 text-white fs-1 fw-bold"><?= $linha['nome'] ?></h4>
                    </div>
                    <div class="card-body">
                        <span><?= $linha['descricao'] ?></span>
                        <span><?= $linha['preco'] ?></span>
                        <img src="<?= base64_decode($linha['img']) ?>" alt="">
                    </div>
                </div>
            </div>
    <?php
            // finaliza o loop que vai mostrar os dados
        } while ($linha = mysqli_fetch_assoc($dados));
        // fim do if
    }
    ?>


    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src=../assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../js/products-page.js"></script>
</body>
<?php
include '../templates/footer.php';
?>