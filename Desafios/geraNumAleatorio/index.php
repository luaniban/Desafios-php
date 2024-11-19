<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interação com formularios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Clique no botao para gerar um numero aleatorio</h1>
    </header>
    <section>
        <form action="index.php" method="get">
            <input type="submit" value="enviar">
                
                <?php 

                    $numAleatorio = $_GET["enviar"];
                    $numAleatorio = mt_rand(0, 100);

                    echo "O numero gerado foi " . $numAleatorio;
                ?>
        </form>
    </section>