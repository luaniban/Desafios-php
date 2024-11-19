<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $num = $_GET["num"];

            echo "O numero antecessor é " . $num - 1 . " e o sucessor é " . $num + 1;
        
        
        ?>
    </main>
</body>
</html>