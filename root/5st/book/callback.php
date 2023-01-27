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
$hello = function ($user) {
    echo"Привет, $user! <br>";
};
$hello("Михаил");
function greet(callable $anon){
    $anon('Катя');
}
greet($hello);
function meet():callable{
    $time = 'утро';
    return function($name) use(&$time){
        return "Доброе $time, $name!";
    };
}
$meeting=meet();
echo $meeting('Вика');
    
    
    ?>
    
</body>
</html>