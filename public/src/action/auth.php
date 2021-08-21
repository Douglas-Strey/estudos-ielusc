<?php
include '../templates/headSecond.php';
include '../database/conexao.php';
require '../hooks/functions.php';
include_once '../helper/flashMessage/flash.php';

if (isset($_POST['formAuth'])) :
    $usuario = $_POST['login'];
    $password = $_POST['password'];

    $result = $mysqli->query("SELECT login AND hash FROM usuarios") or die("erro ao selecionar");
    $row = $result->fetch_assoc();

    if ($row != 0) :
        $hash = $row['hash'];
    else :
        $hash = 0;
    endif;

    if (verifyPassword($password, $hash)) {
        header("Location: /pages/productsPage.php");
    } else {
        setFlash(array("Usuário e/ou senha incorreto!", "alert alertCustomClass"));
    }

endif;

?>

<body>
    <?php
    include '../templates/navBarAuth.php';
    ?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="../assets/img/icon-website.png" id="icon" alt="User Icon" />
            </div>

            <form action="" method="post">
                <input type="text" id="login" class="fadeIn second" name="login" autocomplete="off" placeholder="Usu&aacute;rio">
                <input type="password" id="password" class="fadeIn third" name="password" autocomplete="off" placeholder="Senha">
                <input type="submit" name="formAuth" class="fadeIn fourth signupToast" value="Entrar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="#">Esqueceu sua senha?</a>
                <a class="underlineHover" href="../action/createAuth.php">Cadastre-se agora mesmo!</a>
            </div>

        </div>
    </div>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/sweetAlert/sweetalert2.all.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/auth.js"></script>
</body>

<?php
include '../templates/footer.php';
