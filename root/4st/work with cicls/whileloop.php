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
    
    $numbers = array(10, 20, 30);
    echo'<dt>Цикл while: ';
    $i = 0;
    while ($i < 3){
        echo "<dd>Эллемент $i = $numbers[$i]";
        $i++;
}

    echo'<dt>Цикл do while: ';
    $i = 0;
    do{
        echo "<dd>Эллемент $i = $numbers[$i]";
        $i++;
}
        while ($i < 3);
    
    ?>
</body>
</html>