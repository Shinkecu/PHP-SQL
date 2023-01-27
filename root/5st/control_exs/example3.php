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

function square($x): array{
    $per = $x * 4;
    echo 'периметр квадрата'.$per.'<br>';
    $part = $x ** 2;
    echo 'площадь квадрата'.$part.'<br>';
    $dioganal = sqrt(2) * $x;
    echo 'диагональ квадрата'.$dioganal.'<br>';
    return array($per,$part,$dioganal);
    
}
$sq = square(9);
// foreach ($sq as $data){
//     echo $data.'<br>';
// }



?>
    
</body>
</html>