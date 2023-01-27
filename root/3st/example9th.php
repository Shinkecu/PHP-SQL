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
    $testres = $_GET['testres'];

    if ($testres >= 90 && $testres <= 90){
        echo "Отлично ". $testres . ' баллов';
    }
    elseif ($testres >= 70 && $testres <= 89){
        echo "хорошо ". $testres . ' баллов';
    }
    elseif ($testres >= 50 && $testres <= 69){
        echo "удовлетворительно ". $testres . ' баллов';
    }
    elseif ($testres >= 0 && $testres <= 49){
        echo "неудовлетворительно ". $testres . ' баллов';
    }
    else {
        echo 'чо то не понятные данные';
    }





    ?>
    
</body>
</html>