<?php
$_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>

    <?php
    // strlen - Retorna returns the total characters number

    //echo strlen($_nome); 

    // stripos  - Retorna primeira ocorrência 

    //echo strpos($_nome, "P");


    // strripos - Retorna última ocorrência

    //echo strripos($_nome, "u");

    // strtolower - converte para letras min.

    //echo strtolower($_nome);

    // strtoupper - converte para letras min.

    //echo strtoupper($_nome);

    // SUBSTR_COUNT - Conta quantas ocorreram de um texto ou string. Faz diferença Maiusculas e minusculas

    echo substr_count($_nome, "P");
    echo "<br>";
    echo substr_count($_nome, "u");

    ?>


</body>

</html>