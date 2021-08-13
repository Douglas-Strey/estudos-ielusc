<?php
include '../templates/headSecond.php';
?>

<body>
    <?php
    include '../templates/navBar.php';
    ?>

    <pre>
    <?php

    $produto = $_POST;

    $produtoNome = $produto['productName'];
    $produtoDescricao = $produto['productDescription'];
    $produtoPreco = $produto['productPrice'];
    $produtoImg = $produto['productImg'];

    ?>
    </pre>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script src=../assets/libs/bootstrap/js/bootstrap.bundle.min.js></script>
    <script src="../js/products-page.js"></script>
</body>

<?php
include '../templates/footer.php';
?>