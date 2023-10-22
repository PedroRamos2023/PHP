<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php 
        $estado = isset($_GET["estado"]) ? $_GET["estado"] : "Acre";
        switch($estado) {
            case "Acre":
            case "Amapá":
            case "Amazonas":
            case "Pará":
            case "Rondônia":
            case "Roraima":
            case "Tocantins":
                echo "Você mora na Região Norte";
                break;
            case "Alagoas":
            case "Bahia":
            case "Ceará":
            case "Maranhão":
            case "Paraíba":
            case "Pernambuco":
            case "Piauí":
            case "Rio Grande do Norte":
            case "Sergipe":
                echo "Você mora na Região Nordeste";
                break;
            case "Distrito Federal":
            case "Goiás":
            case "Mato Grosso":
            case "Mato Grosso do Sul":
                echo "Você mora na Região Centro-Oeste";
                break;
            case "Espírito Santo":
            case "Minas Gerais":
            case "Rio de Janeiro":
            case "São Paulo":
                echo "Você mora na Região Sudeste";
                break;
            case "Paraná":
            case "Rio Grande do Sul":
            case "Santa Catarina":
                echo "Você mora na Região Sul";
        }
    ?>

    <br><a href="ex003.html">Voltar</a>
</body>
</html>