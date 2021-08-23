<?php

include '../database/conexao.php';

$produto = $_POST;

if (!empty($produto)) :

    $produtoNome = $produto['productName'];

    $produtoDescricao = $produto['productDescription'];

    $row = $produto['productPrice'];

    $produtoPreco = floatval($row);
    $produtoImg = $_FILES['productImg']['tmp_name'];

    if ($produtoImg) {
        $produtoImgFile = base64_encode(file_get_contents($produtoImg));
    } else {
        $produtoImgFile = null;
    }
    $query = "INSERT INTO produtos (nome, descricao, preco, img) VALUES (?, ?, ?, ?)";
    $data = $mysqli->prepare($query);
    $data->bind_param("ssss", $produtoNome, $produtoDescricao, $produtoPreco, $produtoImgFile);
    $data->execute();
    header('Location: /src/pages/productsPage.php');
endif;

if (!$mysqli->query($sql)) :
    echo $mysqli->error;
endif;
