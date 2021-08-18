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
                <span>Cadastro de usuário</span>
            </div>

            <form action="../pages/productsPage.php" method="post">
                <input type="text" id="newLogin" class="fadeIn second" name="newLogin" placeholder="Usu&aacute;rio">
                <input type="password" id="newPassword" class="fadeIn third" name="newPassword" placeholder="Senha">
                <input type="submit" class="fadeIn fourth signupToast" value="Cadastrar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="../action/auth.php">Já tem um login? entre aqui</a>
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