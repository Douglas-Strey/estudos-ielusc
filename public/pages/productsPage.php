<?php
include '../templates/headSecond.php';
?>

<body>
    <?php
    include '../templates/navBar.php';
    include '../database/conexao.php';
    require '../hooks/functions.php';

    if (isset($_POST['newLogin'])) :
        $usuario = $_POST['newLogin'];
        $hash = encript($usuario, $password);
        $query = "INSERT INTO usuarios (login, hash) VALUES (?, ?)";
        $data = $mysqli->prepare($query);
        $data->bind_param("ss", $usuario, $hash);
        $data->execute();
    endif;

    ?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="../assets/img/icon-website.png" id="icon" alt="User Icon" />
                <span>Cadastro de produto</span>
            </div>

            <form enctype="multipart/form-data" action="../database/dataBase.php" method="post">
                <input type="text" id="productName" class="fadeIn second" name="productName" placeholder="Nome do produto">
                <input type="text" id="productDescription" class="fadeIn second" name="productDescription" placeholder="Descri&ccedil;&atilde;o do produto">
                <input type="text" id="productPrice" class="fadeIn second" name="productPrice" placeholder="Pre&ccedil;o do produto">
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" id="productImg" class="fadeIn second" name="productImg" placeholder="Imagem do produto">
                <input type="submit" class="fadeIn fourth" value="Enviar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="../database/dataBase.php">Visualizar produtos cadastrados</a>
            </div>

        </div>
    </div>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src=../assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../js/products-page.js"></script>
</body>
<?php
include '../templates/footer.php';
?>