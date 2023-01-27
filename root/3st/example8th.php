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

$n1 = $_GET['number1'];
$n2 = $_GET['number2'];

$operation = $_GET['операция'];

if($operation == '*'){ $result = $n1 * $n2; echo $result;}
if($operation == '/'){ $result = $n1 / $n2; echo $result;}
if($operation == '-'){ $result = $n1 - $n2; echo $result;}
if($operation == '+'){ $result = $n1 + $n2; echo $result;}




?>
    
</body>
</html>