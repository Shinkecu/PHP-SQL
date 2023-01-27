<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 1;$i<4 ; $i++){
    echo "<dt>Итерация внешнего цикла $i";

    for ($j = 1;$j<4 ; $j++){
        echo "<dd>Итерация внутреннего цикла $j";
    
        }
    }
    

        
    ?>
</body>
</html>