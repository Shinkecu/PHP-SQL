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
    
    for ($i =1;$i < 4;$i++){
        for($j = 1; $j < 4;$j++){
            if ($i == 1 && $j == 1){
                echo'Продолжать внутренний цикл, если i = $i и j = $j <br
                >';
                continue;
            }
            if ($i == 2 && $j == 1){
                echo'Прервать внутренний цикл, если i = $i и j = $j <br
                >';
                break;
                
            }
            echo "Выполнено i = $i и j = $j <br>";
        }
    }
    
    ?>
</body>
</html>