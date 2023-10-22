<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <pre>
        <?php 
            $v = array("A", "J", "M", "X", "K");
            $tot = count($v);
            echo "O vetor tem $tot elementos<br>";
            print_r($v);
            // var_dump($v);
        ?>
    </pre>
</body>
</html>