<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
        $novafrase = str_replace("Matemática", "PHP", $frase);
        echo "$novafrase";
        // str_replace
        // str_ireplace
    ?>
</body>
</html>