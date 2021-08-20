<?php

session_start();

function setFlash(array $flash)
{
    $_SESSION['flash_message'] = $flash[0];
    $_SESSION['class'] = $flash[1];

    return;
}

function getFlash()
{
    $data = array(
        'class' => $_SESSION['class'],
        'flash_message' => $_SESSION['flash_message']
    );
    destroyFlash();
    return "<div class='" . $data['class'] . "'> " . $data['flash_message'] . "
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    ";
}

function destroyFlash()
{
    unset($_SESSION['flash_message']);
    unset($_SESSION['class']);
}
