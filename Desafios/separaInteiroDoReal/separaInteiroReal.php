<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li>
            
        <?php 
            $num = $_POST["pegarnum"];

            
            $int = (int) $num;
            $real = $num - $int;

            echo "A parte inteira do numero é " . $int . " e a parte real é " . $real;
        ?>
        
        </li>
    </ul>
</body>
</html>