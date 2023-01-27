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
    // плыли по морю 

    /* огось как
    же много
    и много строк  */

    # а это другой тип однострочного ваааааааааааааааау

    $logic = true ;
    $text = 'uraura' ;
    $text1 = 'фильм"Гарри Поттер" ';
    echo $text1;
    $a = 4 ;

    $add = 'Harry' . 'Potter' ;
    echo $add;
    
    $fruits = array("яблоко", "груша", "слива");
    echo '<br>'.$fruits[1];

    $kitchen = array("Spoons"=>"35", "Knifes"=>"3", "Plates"=>"12");
    echo '<br>'.$kitchen['Plates'];

    $families = [["Tom", "Alice"], ["Bob", "Kate"]];
    echo $families[0][0] . "<br />";  //Tom
    echo $families[0][1] . "<br />";  //Alice
    echo $families[1][0] . "<br />";  //Bob
    echo $families[1][1] . "<br />";   //Kate


    $a = 10;
$b = "10";
echo is_numeric($a);
echo "<br>";
echo is_bool($b);

define('USER', 'Михаил');
echo '<p>Привет, '. USER;

?>


</body>
</html>