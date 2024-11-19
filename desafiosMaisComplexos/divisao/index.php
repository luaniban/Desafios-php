<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisao</title>
</head>
<body>
    
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;


        $modulo = $dividendo % $divisor;
        $result = $dividendo / $divisor;

        $result = (int) $result;


    
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" value="0">
            <input type="submit" value="Analisar">
        </form>
    </main>
        <?php ?>

        <section>
            <h2>Estrutura da Divisão</h2>
            <div style="display: flex; justify-content: center;">
                <?="<div style='font-size: 75px; height: 75px; width: 100px;';> ". $dividendo. "</div>"?>

            
                <div style="border-left: 2px solid black; border-bottom: 2px solid black; font-size: 75px; height: 75px; width: 100px;"><?php echo $divisor ?></div>
                
            </div>
            <div style="display: flex; justify-content: center;">
                <div style="font-size: 75px; height: 75px; width: 100px;"><u><?php echo $modulo ?></u></div>

            
                <div style="border-left: 2px solid black; font-size: 75px; height: 75px; width: 100px;"><?php echo $result ?></div>
                
            </div>
        </section>

        <form action="../../index.php" method="get">
        <input type="submit" value="Voltar" style="width: 200px;">
        </form>
    
    
</body>
</html>