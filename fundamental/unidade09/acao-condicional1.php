<?php
$fumante = true;
$a = 5;
$b = 5;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            if ($fumante == true) {
                echo "é proibido fumar" . "</br>";
            }
        ?>

        <?php
            if ($b > $a) {
                echo "realmente b é maior do que a";
            } else {
                echo "caiu no else: b não é maior do que a";
            }
            echo "</br>"
        ?>

        <?php
            if ($a > $b) {
                echo "caiu no if. a é maior do que b";
            } else if ($b > $a) {
                echo "caiu no else if. b é maior do que a";
            } else {
                echo "caiu no else. a é igual a b";
            }

        ?>
    </body>
</html>