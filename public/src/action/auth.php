<?php
include '../templates/headSecond.php';
include_once '../helper/flashMessage/flash.php';

session_start();
?>

<body>
    <?php
    include '../templates/navBarAuth.php';

    if (isset($_SESSION['flash_message'])) :
        getFlash();
        destroyFlash();
    endif;
    ?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="../assets/img/icon-website.png" id="icon" alt="User Icon" />
            </div>

            <form action="../auth/validateLogin.php" method="post">
                <input type="text" id="userLogin" class="fadeIn second" name="userLogin" autocomplete="off" placeholder="Usu&aacute;rio" required>
                <input type="password" id="userPassword" class="fadeIn third" name="userPassword" autocomplete="off" placeholder="Senha" required>
                <input type="submit" name="btnLogin" class="fadeIn fourth signupToast" value="Entrar">
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
