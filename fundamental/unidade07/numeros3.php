<?php
$gasolina = 4.55;
$gasolina2 = 4.45;
?>

<html>
    <body>
    <?php
     echo "usando round com o valor de 4.55 vai para " . round($gasolina);
     echo "</br>";
     echo "round com valor de 4.45 vai para " . round($gasolina2);
     echo "</br>";
     echo "usando ceil arredonda para cima. 4.55 vai para " . ceil($gasolina) . " E mesmo que o float seja inferior a .5 " . ceil($gasolina2);
     echo "</br>";
    echo "com o floor arredonda para baixo. Ex 4.55 vai para " . floor($gasolina);
    ?>
     </body>
</html>
