<?php
include '../templates/headSecond.php';
include_once '../helper/flashMessage/flash.php';
include '../database/conexao.php';
?>

<body>
    <?php
    include '../templates/navBarAuth.php';
    ?>
    <div class="row m-0">
        <?php
        $sql = "SELECT nome, id, descricao, preco, img FROM produtos";
        $result = $mysqli->query($sql) or die(' Erro na requisição ');

        if ($result->num_rows > 0) {
            setFlash(["Consulta realizada com sucesso!", "alert successCustomClass"]);
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-lg-4">
                    <div class="card w-100">
                        <div class="card-header bg-blue">
                            <h4 class="mb-0 text-white fs-3 fw-bold"><?= $row['nome'] ?></h4>
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
            setFlash(["Nenhum produto cadastrado", "alert alertCustomClass"]);
        }
        $mysqli->close();

        ?>
    </div>
    <div class="mt-5 ms-3">
        <a class="text-primary" href="productsPage.php">Voltar</a>
    </div>
    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src=../assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../js/products-page.js"></script>
</body>
<?php
include '../templates/footer.php';
?>