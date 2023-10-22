<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        $m = ($n1 + $n2) / 2;
        echo "A soma entre $n1 e $n2 é igual a $s";

        echo "<br>A soma vale " . ($n1 + $n2);
        echo "<br>A subtração vale " . ($n1 - $n2);
        echo "<br>A multiplicação vale " . ($n1 * $n2);
        echo "<br>A divisão vale " . ($n1 / $n2);
        echo "<br>O módulo vale " . ($n1 % $n2);
        echo "<br>A média vale $m";

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";

        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é " . abs($v2);
        echo "<br>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);
        echo "<br>A raiz de $v1 é " . sqrt($v1);
        echo "<br>O valor de $v2 arredondado é " . round($v2);
        echo "<br>A parte inteira de $v2 é " . intval($v2);
        echo "<br>O valor de $v1 em moeda é R$" . number_format($v1, 2, ",", ".");
    ?>
</body>
</html>