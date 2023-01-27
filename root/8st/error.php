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
    function error_handler($level, $message)
    {
        switch($level)
    {
        case 2: $str = 'Внимание!'; break;
        case 8: $str = 'Предупреждение!'; break;
        default: $str = 'Ошибка!';
    }
    echo "<b>$str</b><br>$message<hr>";
    
}
set_error_handler('error_handler');
echo($var);
$file = fopen('nonsuch.txt', 'r');
$number = 2;
if($number >= 1){
trigger_error('Числовое значение должно быть 1 или меньше');
}
    
    
    
    ?>
</body>
</html>