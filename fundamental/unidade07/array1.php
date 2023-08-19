<?php
$salada = array("apple", "orange", "lemon");
$carrinho = array("João", 46, array(2, "sapato", 559.00));
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
    <?php
    echo "o tipo de dado é " . $salada . " declarado com array() no php" . "</br>";
    echo  "o índex 0 do array salada é " . $salada[0];
    echo "</br>";
    echo "nested array: ex. carrinho de compras, que pode ter diferentes tipos de dados, inclusive arrays. Acessando dados do array interno: " . "</br>" . $carrinho[2][1];
    ?>
</body>

</html>