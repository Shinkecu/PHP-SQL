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

    echo 'Веб-сервер: '.$_SERVER['SERVER_SOFTWARE'].'<br>';
    echo 'Сценарий: '.$_SERVER['PHP_SELF'].'<br>';
    echo 'Имя хоста : '.$_SERVER['HTTP_HOST'].'<br>'; echo 'Метод запроса: '.$_SERVER['REQUEST_METHOD'];
    foreach($_GET as $key => $value)
    {echo '<hr>HTTP GET: '.$key.'='.$value;}

    ?>
</body>
</html>