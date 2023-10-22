<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $numero = $_GET["numero"];
        echo "<h1>Mostrando a Tabuada de $numero</h1><br>";

        $fator = 1;
        do {
            echo "$numero x $fator = " . $numero * $fator . "<br>";
            $fator++;
        } while($fator <= 10);
    ?>
    <br><a href="ex003.php">Voltar</a>
</body>
</html>