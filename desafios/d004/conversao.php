<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
            // Cotação de acordo com a API do Banco Central do Brasil
            $início = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $início . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotação = $dados["value"][0]["cotacaoCompra"];
        
            // echo "A cotação foi $cotação";

            // Quanto $$ você tem?
            $real = $_REQUEST["din"] ?? 0;

            // Equivalência em dólar
            $dólar = $real / $cotação;
            
            // Mostrar o resultado
            // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dólar, 2, ",", ".");

            // Formatação de moedas em internacionalização!
            // Biblioteca intl (Internacionallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
</body>
</html>