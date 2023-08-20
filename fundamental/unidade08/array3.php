<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "existe o valor no array? " . in_array("Laranja", $_salada) . "</br>";
            //or use array_search que retorna o index do elemento
            echo "usando array_search " . array_search("Abacate", $_salada);

        ?>
    </body>
</html>