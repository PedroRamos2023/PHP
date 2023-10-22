<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");
        echo "$frase <br> A string foi encontrada na posição $pos";
    ?>
</body>
</html>