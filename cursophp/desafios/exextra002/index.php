<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random num</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1> Numeros Aleatorios </h1>
        <?php
            $min = 0;
            $max = 100;
            echo "gerando random de 0 a 100<p>";
            echo rand($min, $max);
            
        ?>
        <button onClick="history.go(0);">Gerar random</button>
    </main>
</body>
</html>