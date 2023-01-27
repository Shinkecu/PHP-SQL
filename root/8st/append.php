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
    $info = "\r\n\r\n\tБаллада Рэдингской тюрьмы";
    $info .= "\r\n\t\t\tОскар Уайльд, 1898";
    $filename = 'poem.txt';
    $filestream = fopen($filename, 'a')
    or die('Невозможно открыть файл!');
    $num = fwrite($filestream, $info);
    if($num){
        echo"$num байт добавлено в файл $filename";
    }    
    fclose($filestream);

    ?>
</body>
</html>