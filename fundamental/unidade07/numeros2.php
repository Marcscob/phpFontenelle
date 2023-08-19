<?php
    $salario = 1095;
    $gasolina = 4.55;
    $telefone = "3453-4334";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
               
        <?php
            // testar se é numérica

            echo "o $salario é um número? " . is_numeric($salario) . "</br>";
            echo "o $gasolina é um número? " . is_numeric($gasolina) . "</br>";
            echo "o $telefone é um número? " . is_numeric($telefone) . "</br>";
            echo "<br>";

            // testar se é inteiro

            echo "o $salario é um inteiro? " . is_int($salario) . "</br>";
            echo "o $gasolina é um inteiro? " . is_int($gasolina) . "</br>";
            echo "o $telefone é um inteiro? " . is_int($telefone) . "</br>";
            echo "<br>";

            // testar se é float
            echo "o $salario é um número? " . is_float($salario) . "</br>";
            echo "o $gasolina é um número? " . is_float($gasolina) . "</br>";
            echo "o $telefone é um número? " . is_float($telefone);
        ?>
            
    </body>
</html>