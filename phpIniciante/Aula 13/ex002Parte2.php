<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $n = $_GET["num"];
        for($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            echo "$n x $c = $r<br>";
        }
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>