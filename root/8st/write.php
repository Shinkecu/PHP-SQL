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
    $poem = "\r\n\tнет, не смотрел никто из нас ";
    $poem .= "\r\n\tС такой тоской в глазах ";
    $poem .= "\r\n\tНа лоскуток голубизны";
    $poem .= "\r\n\tВ тюремных небесах";
    $filename = 'poem.txt';
    $filestream = fopen($filename, 'w')
    or die('Невозможно открыть файл!');
    $num = fwrite($filestream, $poem);
    if($num){
        echo "$num байт записано в файл $filename";
    }
    fclose($filestream);
    ?>
</body>
</html>