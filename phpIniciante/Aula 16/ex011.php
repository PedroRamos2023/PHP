<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode(" ", $vetor);
        print($texto);
    ?>
</body>
</html>