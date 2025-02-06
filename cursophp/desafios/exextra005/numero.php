<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Numero Real</h1>
        <?php
            $num = $_POST["n"] ?? 0;

            echo "<p> Analisando <strong>". number_format($num, 3, ",", ".") ."</strong> informado <p>";

            $int = (int) $num;
            $fra = $num-$int;

            echo "<ul><li> A parte inteira é <strong>". number_format($int,0, ",", ".") ."</strong> </li>";

            echo "<li> A parte fracionaria é <strong>". number_format($fra,3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>