<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado Final</h1>

        <?php
            $numero = $_GET ["numero"];
            echo "<p> O numero escolhido foi <strong>$numero</strong>";
            $numero_ant = $numero - 1;
            echo "<p> o seu antecessor é $numero_ant";
            $numero_suc = $numero +1;
            echo "<p> o seu sucessor é $numero_suc";
        ?>
         <p><a href="javascript:history.go(-1)"> volta porra </a></p> 
         <button onclick="javascript:history.go(-1)"> Volta ai</button>
    </main>
</body>
</html>