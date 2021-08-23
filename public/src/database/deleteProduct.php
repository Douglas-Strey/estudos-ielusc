<?php
include '../database/conexao.php';
include '../hooks/functions.php';

$id = $_GET['produto_id'];

$query = "DELETE FROM produtos WHERE produto_id = $id";

$data = $mysqli->query($query) or die("Error executing" . $query);

redirectProductData(["Produto apagado com sucesso!", "successCustomClass"]);
