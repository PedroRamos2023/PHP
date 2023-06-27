<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $atual = date("Y");
        $nascimento = $_GET['nascimento'] ?? 2000;
        $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a Sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano você nasceu</label>
            <input type="number" name="nascimento" id="nascimento" value="<?=$nascimento?>" max="<?=($atual - 1)?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $idade = $ano - $nascimento;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>