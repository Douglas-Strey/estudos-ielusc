<?php
include '../templates/headSecond.php';
?>

<body>
    <?php
    include '../templates/navBar.php';

    $dataPassword = $_POST['password'];
    $dataLogin = $_POST['login'];

    ?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="../assets/img/icon-website.png" id="icon" alt="User Icon" />
                <span>Cadastro de produto</span>
            </div>

            <form action="../database/dataBase.php" method="post">
                <input type="text" id="productName" class="fadeIn second" name="productName" placeholder="Nome do produto">
                <input type="text" id="productDescription" class="fadeIn second" name="productDescription" placeholder="Descri&ccedil;&atilde;o do produto">
                <input type="text" id="productPrice" class="fadeIn second" name="productPrice" placeholder="Pre&ccedil;o do produto">
                <input type="submit" class="fadeIn fourth" value="Enviar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="#">Visualizar produtos cadastrados</a>
            </div>

        </div>
    </div>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script src=../assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../js/products-page.js"></script>
</body>
<?php
include '../templates/footer.php';
?>