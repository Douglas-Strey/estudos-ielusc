<pre>
    <?php

    include '../database/conexao.php';

    $produto = $_POST;

    if ($produto) {
        $produtoNome = $produto['productName'];
        $produtoDescricao = $produto['productDescription'];
        $row = $produto['productPrice'];
        $produtoPreco = floatval($row);
    }

    $sql = "INSERT INTO produtos (nome, descricao, preco) 
            VALUES ('$produtoNome', '$produtoDescricao', '$produtoPreco')";

    if (!$mysqli->query($sql)) :
        echo $mysqli->error;
    endif;

    $mysqli->close();
    ?>
</pre>