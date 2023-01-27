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
    $str ='| Первое начало термодинамики — один из основных законов этой дисциплины |'; echo "Исходная строка: $str";
    echo '<hr>Обращенная строка'.strrev_enc($str);
    echo '<hr>Повторяющаяся строка'.str_repeat($str, 3);
    echo '<hr>Обрезанная строка'.trim($str, '|');
    $pad = str_pad($str,30,'*',STR_PAD_LEFT);
    echo"<hr>Подставка символов: $pad";
    echo '';
    $token = strtok($str,'');
    while($token){
    echo "$token ...";
    $token = strtok(' ');
}






























function strrev_enc($str)
{
	$str = iconv('utf-8', 'windows-1251', $str);
	$str = strrev($str);
	$str = iconv('windows-1251', 'utf-8', $str);
	return $str;
}
    ?>
</body>
</html>