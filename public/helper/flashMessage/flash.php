<?php



function flash($name = "", $message = "", $class = "alert alert-success")
{
    if (!empty($name) && !empty($message) && !empty($class)) {
        if (!empty($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
        if (!empty($_SESSION[$name . "_class"])) {
            unset($_SESSION[$name . "_class"]);
        }
        $_SESSION[$name] = $message;
        $_SESSION[$name . "_class"] = $class;
    } elseif (empty($message) && empty($class) && !empty($name) && !empty($_SESSION[$name])) {
        echo '<div class="' . $_SESSION[$name . "_class"] . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
        unset($_SESSION[$name]);
        unset($_SESSION[$name . "_class"]);
    }
}


function setFlash($mensagem = "", $classe = "")
{
    session_start();

    $_SESSION[$mensagem];
    $_SESSION[$classe];

    return $_SESSION;
}

function getFlash()
{
    return '<div class="' . $_SESSION[$classe] . '">' . $_SESSION[$mensagem] . '</div>';
}
