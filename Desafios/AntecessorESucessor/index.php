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
        <h1>Digite um numero para indicar seu antecessor e sucessor</h1>
    </header>
    <section>
        <form action="peganum.php" method="get">
            <label for="num">Numero</label>
            <input type="text" name="num" id="num">
            <input type="submit" value="enviar">
        </form>
    </section>