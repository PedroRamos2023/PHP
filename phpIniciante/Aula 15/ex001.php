<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        function teste(&$x) {
            echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
    ?>
</body>
</html>