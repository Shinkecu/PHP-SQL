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
    $m = [17,18, 9, 78, 8 ];
    $i = 0;

    do{
        echo $m[$i] . "<br>";
        $i += 2;
    }
    while($i <= count($m))
    
    ?>
</body>
</html>