<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ " . number_format($preco, 2);
        $preco += ($preco * 10 / 100);
        echo "<br>E o novo preço com 10% de aumento será R$ " . number_format($preco, 2);

        /* Esse exercício pretende demonstar o uso de operadores de incremento e decremento */
        $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
        echo "<br><br>O ano atual é $atual e o ano anterior é " . --$atual;

        $a = 3;
        $b = &$a;
        $b += 5;
        echo "<br><br>A variável A vale $a";
        echo "<br>A variável B vale $b";

        $x = "abc";
        $$x = "def";
        echo "<br><br>O conteúdo da variável X é $x";
        echo "<br>A variável ABC recebeu o valor $abc";
    ?>
</body>
</html>