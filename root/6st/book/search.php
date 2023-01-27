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
    $str = 'Спать надо ночью до сна';
    echo "'$str'<br>Длина строки:". mb_strlen($str);
    echo "<br>Первое вхождение 'до': ".mb_strpos($str,'до');
    echo "<br>Последнее вхождение 'до': ".mb_strrpos($str,'до');
    echo "<hr>Подстрока от первого вхождения 'до':".mb_strstr($str, 'до');
    echo "<br>Подстрока от первого вхождения 'до' без учета регистра:".mb_stristr($str, 'до');
    echo "<hr>Символы от первого вхождения'д':".mb_strrchr($str,'д');
    echo "<hr>Символы от последнего вхождения'д':".mb_strrichr($str,'д');
?>
</body>
</html>