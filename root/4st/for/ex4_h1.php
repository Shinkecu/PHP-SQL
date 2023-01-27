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

$mass = ['x1' => 'aaaaaa ','x2' =>'eto moy grib ','x3' => 'ya ego syem'];
foreach($mass as $el => $problemo){
    if($problemo <= 0){
        continue;
    }
    echo $el . ' => ' . $problemo;
}


?>   
</body>
</html>