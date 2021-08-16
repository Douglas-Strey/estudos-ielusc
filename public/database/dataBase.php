<pre>
    <?php

    include '../database/conexao.php';

    $produto = $_POST;

    if ($produto) {
        $produtoNome = $produto['productName'];
        $produtoDescricao = $produto['productDescription'];
        $row = $produto['productPrice'];
        $produtoPreco = floatval($row);
        $produtoImg = $_FILES['productImg']['tmp_name'];

        // pegar imagem e converter pra base64
        if ($produtoImg) {
            $produtoImgBase64 = base64_encode(file_get_contents($produtoImg));
        } else {
            $produtoImgBase64 = 0;
        }
    }

    $sql = "INSERT INTO produtos (nome, descricao, preco, img) 
            VALUES ('$produtoNome', '$produtoDescricao', '$produtoPreco', '$produtoImgBase64')";

    if (!$mysqli->query($sql)) :
        echo $mysqli->error;
    endif;

    $mysqli->close();
    ?>
</pre>