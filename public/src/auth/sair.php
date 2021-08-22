<?php

session_start();

include_once ("../hooks/functions.php");

unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

redirectAuthPage(["Desconectado(a) com sucesso!", "successCustomClass"]);