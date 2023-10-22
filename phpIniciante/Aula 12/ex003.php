<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <form action="ex003Parte2.php" method="get">
        Número:
        <select name="numero">
            <?php 
                $n = 1;

                do {
                    echo "<option value='$n'>$n</option>";
                    $n++;
                } while($n <= 10);
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>