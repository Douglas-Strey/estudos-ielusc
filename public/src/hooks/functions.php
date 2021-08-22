<?php
include_once '../helper/flashMessage/flash.php';

function encript($usuario, string $password)
{
    return password_hash($usuario, PASSWORD_DEFAULT);
}

function redirectAuthPage(array $params)
{
    setFlash([$params[0], $params[1]]);

    header("Location: ../action/auth.php");
}

function checkLogin()
{
    if (!empty($_SESSION['id'])) :
        echo "<div class='alert infoCustomClass'>Olá " . $_SESSION['nome'] . ", bem vindo! 
        <button type='button' class='btn-close align-middle' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    else:
        redirectAuthPage(["Você precisa estar logado para acessar esta página!", "dangerCustomClass"]);
    endif;

    return;
}