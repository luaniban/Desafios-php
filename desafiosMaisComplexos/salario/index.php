<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SalarioMinimo</title>
</head>
<body>

    <?php

        $salariomin = 1412;
        $salario = $_GET["salario"];

        $salarioSla = $salario;

        $restoSalario = $salario % $salariomin;

        for ($contador = 0; $salarioSla >= 1412; $contador++) {
            $salarioSla =  $salarioSla - $salariomin;
        }
    ?>
    <main>
        <h1>Informe seu salario</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" value="<?= $salario?>">
            <p>Considerando o salário mínimo de R$1412,00</p>
            <input type="submit" value="Calcular">

        </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "Quem recebe um salário de R\$ " . number_format($salario, 2, ",", ".") . " recebe " . number_format($contador, 0, ",", ".") . " salários minimos + R\$" . number_format($restoSalario, 2, ",", ".") . ".";
            
        ?>
    </section>

    <form action="../../index.php" method="get">
        <input type="submit" value="Voltar" style="width: 200px;">
    </form>
    
</body>
</html>