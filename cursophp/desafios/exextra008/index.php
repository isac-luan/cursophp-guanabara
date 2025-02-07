<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? 1;
    ?>
    <main>
        <h1>Raiz Quadrada e Cubica</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
        echo "A raiz quadrada de $valor1 é " . sqrt($valor1);

        $raiz_cu = pow($valor1, 1/3);
        echo "<br> A raiz cubica de $valor1 é " . $raiz_cu;  

        ?>

    </section>
</body>

</html>