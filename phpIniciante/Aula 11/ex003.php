<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
        $final = isset($_GET["final"]) ? $_GET["final"] : 0;
        $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;

        if($inicio < $final) {
            while($inicio <= $final) {
                echo "$inicio ";
                $inicio += $incremento;
            }
        } elseif($inicio > $final) {
            while($inicio >= $final) {
                echo "$inicio ";
                $inicio -= $incremento;
            }
        } else {
            echo "$inicio";
        }
    ?>

    <a href="ex003.html"><br>Voltar</a>
</body>
</html>