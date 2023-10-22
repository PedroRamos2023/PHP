<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
        $media = ($n1 + $n2) / 2;
        echo "A média entre $n1 e $n2 é igual a $media<br>";
        if($media < 5) {
            $situacao = "REPROVADO";
        } elseif($media >= 5 && $media < 7) {
            $situacao = "RECUPERAÇÃO";
        } else {
            $situacao = "APROVADO";
        }
        echo "Situação do aluno: $situacao<br>";
    ?>

    <a href="ex003.html">Voltar</a>
</body>
</html>