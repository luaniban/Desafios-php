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
    $num = $_GET["num"];
    $numExibir = $num;
    if($num >= 100){

        for($contar100 = 0; $num >=100; $contar100++){
            $num = $num - 100;
        }
    }
    if($num >= 50){
        for($contar50 = 0; $num >=50; $contar50++){
            $num = $num - 50;
        }
    }

    if($num >= 20){
        for($contar20 = 0; $num >=20; $contar20++){
            $num = $num - 20;}
    }

    if($num >= 10){
        for($contar10 = 0; $num >=10; $contar10++){
            $num = $num - 10;}
    }

    if($num >= 5){
        for($contar5 = 0; $num >=5; $contar5++){
            $num = $num - 5;}
    }

    if($num >= 1){
        for($contarmoeda1 = 0; $num >=1; $contarmoeda1++){
            $num = $num - 1;}
    }

    
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="num" value="<?= $num?>">
            <input type="submit" value="Sacar">
        
        </form>

    </main>

    <section>
        <?php 
            echo "<h2>Saque de R$" . $numExibir . " realizado</h2><p>O caixa eletrônico vai te entregar as seguintes notas: </p><ul>
            <li><img src='img/nota100.jpeg' alt='nota100 width='50' height='50'>x" . $contar100 . "</li>
            <li><img src='img/nota50.jpeg' alt='nota50' width='115' height='50'>x" . $contar50 . "</li>
            <li><img src='img/nota20.jpeg' alt='nota20' width='115' height='50'>x" . $contar20 . "</li>
            <li><img src='img/nota10.jpeg' alt='nota10' width='115' height='50'>x" . $contar10 . "</li>
            <li><img src='img/nota5.jpeg' alt='nota5' width='115' height='50'>x" . $contar5 . "</li>
             <li><img src='img/moeda1.jpeg' alt='moeda1' width='50' height='50'>x" . $contarmoeda1 . "</li>
            
            </ul>"  
        ?>
    </section>
    
    <form action="../../index.php" method="get">
        <input type="submit" value="Voltar" style="width: 200px;">
    </form>
</body>
</html>