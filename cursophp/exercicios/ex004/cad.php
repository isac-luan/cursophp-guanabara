<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>preto</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET ["sobrenome"] ?? "desconhecido";
            echo "<p> vai se fuder, $nome $sobrenome. tomar no teu cu";
        ?>
        <p><a href="javascript:history.go(-1)"> volta porra </a></p> 
    </main>
</body>
</html>