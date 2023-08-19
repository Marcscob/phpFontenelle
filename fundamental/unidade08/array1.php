<?php
$salada = array("apple", "lemon", "orange")
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
    <?php
    echo $salada[0] . "</br>";
    echo $salada[1] . "</br>";
    echo $salada[2] . "</br>";
    //inserting values in array
    $salada[] = "avocato";
    echo $salada[3] . "</br>";
    //finding out length
    echo count($salada) . "</br>";
    //array structure
    ?>
    <pre>
            <?php
            print_r($salada);
             ?>
    </pre>





</body>

</html>