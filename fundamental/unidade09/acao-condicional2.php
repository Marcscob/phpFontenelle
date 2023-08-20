<?php
$x= "eu sou x";
$y= "eu sou y";

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
            if($g) {
               echo "<h2>mostrar $y </h2>";
            } else if ($x) {
                echo "<h2> mostrar $x</h2>";
            }
        ?>

        <script>
            let meuH2 = document.getElementsByTagName('h2')[0];
            alert(meuH2.textContent);
            
        </script>
    </body>
</html>