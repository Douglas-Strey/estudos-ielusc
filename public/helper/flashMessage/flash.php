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
    return "<div class='" . $_SESSION['class'] . "'> " . $_SESSION['flash_message'] . "</div>";
}

function destroyFlash()
{
    unset($_SESSION['flash_message']);
    unset($_SESSION['class']);

    return;
}
