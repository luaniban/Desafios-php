<?php 

    $numAleatorio = $_GET["numAleatorio"];
    $numAleatorio = rand(0, 100);

    echo "O numero gerado foi " . $numAleatorio;
?>