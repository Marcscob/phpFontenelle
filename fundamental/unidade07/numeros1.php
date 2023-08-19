<?php 
    $salario = 16000;
    $meses   = 12;
    $dolar = 5;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao

            echo "o meu salário em 12 meses é de: " . $salario * $meses . ",00" . "<br>";

            echo "valor anual em dolar: " . $salario * $meses / $dolar . ",00" . "</br>"; 

            // Exponencial
            echo "Raiz quadrada: " . pow(6,3) . "</br>";

            // Raiz Quadrada

            // Randômico Generica
            echo "Randomico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo " . rand(2,6) . "</br>";
            
            // Valor absoluto - sempre retorna um valor positivo
            echo "o absoluto de -34 é igual a " . abs(-34);

            
        ?>
    </body>
</html>