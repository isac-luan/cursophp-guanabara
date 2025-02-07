<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias Aritmeticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    $peso1 = $_GET['p1'] ?? 0;
    $peso2 = $_GET['p2'] ?? 0;
    ?>
    <main>
        <h1>Medias Aritmeticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Nota 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" value="<?= $peso1 ?>">
            <label for="v2">Nota 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" value="<?= $peso2 ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
            $soma = $valor1+$valor2;
            $mediasimples = $soma/2;
            echo "A Media simples é $mediasimples";

            $pesototal = $peso1+$peso2;
            $mediaponderada = $soma/$pesototal;
            echo "<br> A media ponderada é $mediaponderada";

        ?>

    </section>
</body>

</html>