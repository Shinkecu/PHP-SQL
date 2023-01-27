<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP

    $days = array('Понедельник', 'Вторник', 'Среда');
    foreach($days as $value) {echo "&bull; $value ";}
    $months = array('янв' => 'Январь', 'Фев' => 'Февраль', 'Мар' => 'Март');

    echo '<dl>';
    foreach($months as $key => $value)
    {echo "<dt>$key<dd>$value";}
    echo '</dl>';
    ?>
</body>
</html>