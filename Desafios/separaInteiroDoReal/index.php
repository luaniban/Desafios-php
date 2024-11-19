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
        <h1>Clique no botao para separar a parte inteira da real do numero</h1>
    </header>
    <section>
        
        <form action="separaInteiroReal.php" method="post">
            <input type="number" name="pegarnum" id="n" step="0.001">
            <input type="submit" value="enviar">
        </form>
    </section>