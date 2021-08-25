<?php
include '../templates/headSecond.php';

session_start();
?>

<body>
    <?php
    include '../templates/navBar.php';
    include '../database/conexao.php';
    require '../hooks/functions.php';

    checkLogin();
    ?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="../assets/img/icon-website.png" id="icon" alt="User Icon" />
                <span>Cadastro de produto</span>
                <a class="underlineHover ms-5" href="../auth/sair.php">Sair</a>
            </div>

            <form enctype="multipart/form-data" action="../database/dataBase.php" method="POST">
                <input type="text" id="productName" class="fadeIn second" name="productName" placeholder="Nome do produto" required>
                <input type="text" id="productDescription" class="fadeIn second" name="productDescription" placeholder="Descri&ccedil;&atilde;o do produto" required>
                <input type="text" id="productPrice" class="fadeIn second" name="productPrice" placeholder="Pre&ccedil;o do produto" required>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" id="productImg" class="fadeIn second" name="productImg" placeholder="Imagem do produto">
                <input type="submit" class="fadeIn fourth submitForm" value="Enviar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="../pages/productsData.php">Visualizar produtos cadastrados</a>
            </div>

        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src=../assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../js/products-page.js"></script>
</body>
<?php
include '../templates/footer.php';
