<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <main>
        <?php

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url= 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dolar= json_decode(file_get_contents($url), true);
           
            $cotação = $dolar["value"][0]["cotacaoCompra"];

            echo "A cotação foi $cotação<p>";

            $valor=$_GET ["valor"];
            $resultado=$valor/$cotação;
           // echo "Voce tem: <strong><p>$ $resultado</p></strong>";
           //echo "Voce tem: US\$ ".  number_format($resultado, 2, ",");
           $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
           echo "sua miseria " . numfmt_format_currency($padrão, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $resultado, "USD");

           
        ?>
        <button onClick="history.go(-1);">faz o l</button>
    </main>
    
</body>
</html>