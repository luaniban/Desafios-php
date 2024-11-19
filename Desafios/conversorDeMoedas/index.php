<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConversorDeMoedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <?php 
        
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados['value'][0]['cotacaoCompra'];
        
        
        $real = $_GET["real"] ?? 0;

        $dolar = $real / $cotacao;
    ?>
    <main>
    <h1>Conversor de real para dolar baseado em tempo real</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <Label>Digite o numero:</Label>
        <input type="text" name="real" id="real">
        <input type="submit" value="converter">
    </form>
    </main>

    <section><?php echo "R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");?></section>

    <form action="../../index.php" method="get">
        <input type="submit" value="Voltar" style="width: 200px;">
        </form>
</body>
</html>