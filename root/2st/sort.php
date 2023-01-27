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
    $a =    NULL; $b = 8; $c = "PHP - это весело!";
    $verb = ($b === 1)? "угадали": "не угадали";
    echo "Вы $verb! Вы назвали число $b. <hr>";
    $parity = ($b% 2!= 0)? "нечетное": "четное";
    echo "sb - $parity число<hr>";

    $result = $a?? $b?? $c; echo "abc: $result <br>";
    $result = $c?? $b?? $a; echo "cba: $result <br>";


    ?>
</body>
</html>