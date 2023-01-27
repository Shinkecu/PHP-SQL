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

    define('USER', 'Михаил');
    define('PETS', ['котенок', 'щенок', 'хомячок'] );
    echo '<p>Привет, '. USER. '. Как поживает твой '. PETS[1]. '? </p>';
    echo '<p>Ты используешь PHP-движок версии'. PHP_VERSION;
    echo ', запущенный в '. PHP_OS. '</P>';

    $x = array(25, 23);
    echo $x[1];
    ?>
</body>
</html>