<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2<br>";
        $r = ($tipo = "s") ? $n1 + $n2 : $n1 * $n2;
        echo "O resultado será $r";

        $a = 3;
        $b = "3";
        $r = ($a === $b) ? "SIM" : "NÃO";
        echo "As variáveis são idênticas? $r";

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $m<br>";
        echo "A situação do aluno é " . (($m < 6) ? "REPROVADO" : "APROVADO");

        $ano = $_GET["an"];
        $idade = 2014 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade >= 18 && $idade <= 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        echo "E dessa forma seu voto é $tipo";
    ?>
</body>
</html>