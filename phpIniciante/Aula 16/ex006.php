<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $nome = "   José da Silva   ";
        echo(strlen($nome));
        $novo = ltrim($nome);
        echo $novo;
        echo(strlen($novo));
    ?>
</body>
</html>