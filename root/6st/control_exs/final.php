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

function cut($string){

    $len = mb_strlen($string);

    $inp = mb_strpos($string,'/*');
    $out = mb_strrpos($string, '*/');

    $part1 = mb_substr($string, 0,$inp);
    $part2 = mb_substr($string, $out+2,$len);

    $result = $part1.$part2;


    return $result;
    }
    echo cut('Он любит мороженное, /* я так то тоже*/ жить без них не мог')

  
    


?>

</body>
</html>