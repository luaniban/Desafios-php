<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raizes</title>
</head>
<body>

    <?php

        $num = $_GET["num"];

        $numRaizQ = $num;
        $numRaizC = $num;
        $numRaizQ = sqrt($numRaizQ);
        $numRaizC = pow($numRaizC, 1.0 / 3.0)
    ?>
    <main>
        <h1>Informe um numero</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Número</label>
            <input type="number" name="num" value="<?= $num?>">
            <input type="submit" value="Calcular raízes">

        </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo  "Analisando o numero " .$num.", temos: <ul>
        <li>A  raíz quadrada é " . number_format($numRaizQ, 3, ",", ".") . "</li>
        <li>A raíz cubica é " . number_format($numRaizC, 3, ",", ".") . "</li>
        </ul>"  
            
        ?>
    </section>

    <form action="../../index.php" method="get">
        <input type="submit" value="Voltar" style="width: 200px;">
    </form>
    
</body>
</html>