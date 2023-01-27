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
    $x = 5; $y = 10;
    echo "X: $x, Y: $y <br>";
    $x = $x ^ $y;
    $y = $x ^ $y;
    $x = $x ^ $y;
    echo "X: $x, Y: $y <br>";
    


    ?>
</body>
</html>