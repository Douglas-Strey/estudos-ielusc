<?php
include '../templates/headSecond.php';
?>

<body>
    <?php
    include '../templates/navBar.php';
    ?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="../assets/img/icon-website.png" id="icon" alt="User Icon" />
            </div>

            <form action="../pages/productsPage.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usu&aacute;rio">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
                <input type="submit" class="fadeIn fourth signupToast" value="Entrar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="#">Esqueceu sua senha?</a>
            </div>

        </div>
    </div>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/auth.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<?php
include '../templates/footer.php';
?>