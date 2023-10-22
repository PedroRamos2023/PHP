<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase, 2);
        print_r($cont);
    ?>
</body>
</html>