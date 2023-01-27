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

    $filestream = fopen('variable.php', 'r');
    $data = array('PHP', 1, 2.3, TRUE, NULL, array(), new Directory, $filestream);
    foreach($data as $type)
    {
        var_dump($type);
        echo '<br> ';
    }
        fclose($filestream);
        echo gettype($filestream);

    ?>
</body>
</html>