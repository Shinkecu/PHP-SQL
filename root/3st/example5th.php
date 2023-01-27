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


     $weight = $_GET['weight'];
     $index = $_GET['index'];

     if ($index = 'bit' && $index != 'kb'){
        $meow = $weight * 8;
        echo $meow;

    }

     if ($index != 'bit' && $index = 'kb'){
        $uwu = $weight / 8;
        echo $uwu;
    }
     




    ?>
    
</body>
</html>