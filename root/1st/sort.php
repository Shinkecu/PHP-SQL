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

    $cars = array('УАЗ' => 'Патриот', 'ГАЗ' => 'Сайбер', 'ВАЗ' => 'Нива');

    echo '<dl><dt>Исходный порядок элементов:<dd>';
    foreach($cars as $key => $value)
    {echo ' &bull; ', $key. ' '. $value;}
    asort($cars);
    echo '<dt>Сортировка по значению:<dd>';
    foreach($cars as $key => $value)
    {echo ' &bull; ', $key. ' '. $value;}

    ksort($cars);
    echo '<dt>Сортировка по ключу:<dd>';
    foreach($cars as $key => $value)
    {echo ' &bull; ', $key. ' '. $value;}
    echo'</dl>';
    ?>
</body>
</html>