<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Salário Equivale a Quantos Salarios Minimos?</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? 1;
    $valor2 = $_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Quantos salarios minimos equivalem seu salario?</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Seu Salário</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php
        $salariomin = 1518;
        $quociente = intdiv($valor1, $salariomin);
        $resto = $valor1 % $salariomin;
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        if ($quociente == 1) {
            echo "Seu salario de " . numfmt_format_currency($padrão, $valor1, "BRL") . " equivale a $quociente salario minimo + " . numfmt_format_currency($padrão, $resto, "BRL") . " reais.";
        } elseif ($valor1 < $salariomin) {
            echo "Seu salário é menor que um salário minimo :(";
        } else {
            echo "Seu salario de " . numfmt_format_currency($padrão, $valor1, "BRL") . " equivale a $quociente salarios minimos + " . numfmt_format_currency($padrão, $resto, "BRL") . " reais.";
        }

        ?>

    </section>
</body>

</html>