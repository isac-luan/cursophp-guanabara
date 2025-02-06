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
            $valor=$_GET ["valor"];
            $dolar=6.2;
            $resultado=$valor/$dolar;
           // echo "Voce tem: <strong><p>$ $resultado</p></strong>";
           //echo "Voce tem: US\$ ".  number_format($resultado, 2, ",");
           $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
           echo "sua miseria " . numfmt_format_currency($padrão, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");

           
        ?>
        <button onClick="history.go(-1);">faz o l</button>
    </main>
    
</body>
</html>