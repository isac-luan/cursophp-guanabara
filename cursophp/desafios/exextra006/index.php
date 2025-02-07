<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? 1;
    $valor2 = $_GET['v2'] ?? 1;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Divisão</h2>
        <?php
        //$quociente = $valor1/$valor2;
        $quociente = intdiv($valor1, $valor2);
        $resto = $valor1 % $valor2;
        echo "o dividendo é $valor1, o divisor é $valor2, o quociente é $quociente e o resto é $resto";
        ?>

        <div>
            <table>
                <tbody>
                <tr>
                    <td class="td"><?php echo $valor1; ?></td>
                    <td><?php echo $valor2; ?></td>
                </tr>
                <hr>
                <tr>
                    <td><?php echo $resto; ?></td>
                    <td><?php echo $quociente; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>