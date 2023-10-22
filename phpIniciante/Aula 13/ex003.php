<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
        $c1 = 0;

        echo "<h1>Analisando o número $numero...</h1>";
        echo "Valores múltiplos: ";
        for($c = 1; $c <= $numero; $c++) {
            if($numero % $c == 0) {
                echo "$c ";
                $c1++;
            }
        }
        echo "<br>Total de múltiplos: $c1";
        if($c1 == 2) {
            echo "<br>Resultado: $numero É PRIMO!";
        } else {
            echo "<br>Resultado: $numero NÃO É PRIMO!";
        }
    ?>
</body>
</html>