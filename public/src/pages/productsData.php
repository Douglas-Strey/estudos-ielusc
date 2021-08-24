<?php
include '../templates/headSecond.php';
include_once '../helper/flashMessage/flash.php';
include '../database/conexao.php';
include '../hooks/functions.php';

session_start();
?>

<body>
    <?php
    include '../templates/navBarAuth.php';

    checkLoginData();
    ?>
    <div class="row m-0">
        <?php
        $sql = "SELECT nome, produto_id, descricao, preco, img FROM produtos";
        $result = $mysqli->query($sql) or die(' Erro na requisição ');

        if ($result->num_rows > 0) {
            setFlash(["Consulta realizada com sucesso!", "successCustomClass"]);
            getFlash();
            while ($row = $result->fetch_assoc()) {

        ?>
                <div class="col-lg-4">
                    <div class="card w-100">
                        <div class="card-header bg-blue">
                            <h4 class="mb-0 text-white fs-3 fw-bold"><?= $row['nome'] ?></h4>
                        </div>
                        <div class="card-body">
                            <span class="fs-5 fw-normal"><?= $row['descricao'] ?></span><br />
                            <span class="fs-5 fw-normal">R$ <?= $row['preco'] ?></span><br />
                            <img class=".img-fluid" src="data:image/png;base64,<?= $row['img'] ?>" alt="" style="width:300px"> <br>
                            <span><button class="border-0 btn btn-danger mt-2"><a class="text-white" href="../database/deleteProduct.php?produto_id='<?= $row['produto_id'] ?>'">
                                        Apagar
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a></button></span>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            setFlash(["Nenhum produto cadastrado", "alertCustomClass"]);
            getFlash();
        }
        $mysqli->close();
        destroyFlash();
        ?>
    </div>
    <div class="mt-5 ms-3">
        <a class="btn btn-primary" href="productsPage.php">Voltar</a>
    </div>
    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src=../assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../js/products-page.js"></script>
</body>
<?php
include '../templates/footer.php';
