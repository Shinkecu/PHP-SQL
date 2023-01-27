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
    echo 'Дата: '.date('js F Y').'<br>';
    echo 'День недели: '.date('1').'<br>';
    echo 'Время: '.date('h: i: s a').'<br>';
    echo 'Часовой пояс: '.date_default_timezone_get().'<hr>';

    date_default_timezone_set('Europe/Moscow');
    echo 'Текущий часовой пояс: '.date_default_timezone_get();
    echo '<br>Текущее время: '.date('h: i: s').'<hr>';
    $d = strtotime('tomorrow');
    echo 'Завтра: '.date('l, js F Y' , $d).'<br>';

    $d = strtotime('August 18, 1979');
    echo 'День рождения Михаила: '.date('js F', $d);
    


    ?>
</body>
</html>