<?php
$dia = "domingo";
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

    switch ($dia) {
        case "segunda":
            echo "hoje é segunda";

            break;

        case "terça":
            echo "hoje é terça";

            break;

        case "sexta":
            echo "hoje é sexta";

        default:
            echo "é fds";
    }

    ?>
</body>

</html>