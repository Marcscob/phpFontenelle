<?php
    $megasena = array(34,56,65,32,12,15);
    //sorting from bottom to top
    sort($megasena);
    //sorting from top to bottom
    rsort($megasena)
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo min($megasena) . "</br>";
            echo max($megasena) . "</br>";
        ?>

        <pre>
        <?php 
            print_r($megasena);
        ?>
        </pre>
        
    </body>
</html>