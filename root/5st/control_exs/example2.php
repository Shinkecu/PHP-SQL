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

function is_year_leap($year){
    if($year % 4 == 0){
        return true;
    }
    else{
        return false;
    }
    
}
$i = is_year_leap(2019);
echo $i;
?>
    
</body>
</html>