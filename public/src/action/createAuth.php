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

            <form action="../auth/validateRegister.php" method="post">
                <input type="text" id="newUserName" class="fadeIn second" name="newUserName" placeholder="Nome Completo" required>
                <input type="text" id="newUserLogin" class="fadeIn second" name="newUserLogin" placeholder="Usu&aacute;rio" required>
                <input type="text" id="newUserEmail" class="fadeIn second" name="newUserEmail" placeholder="E-mail" required>
                <input type="password" id="newPassword" class="fadeIn third" name="newPassword" placeholder="Senha" required>
                <input type="submit" name="btnRegister" class="fadeIn fourth signupToast" value="Cadastrar">
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