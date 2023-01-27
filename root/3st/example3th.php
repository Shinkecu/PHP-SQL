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
    $x = $_GET['x'];
    $y = $_GET['y']; 
    
    if( $x > 0 && $y > 0 ){
        echo '1 part';
    }
    if($x < 0 && $y < 0){
        echo '3 part';
    }
    if($x < 0 && $y > 0){
        echo '4 part';
    }
    if($x > 0 && $y < 0){
        echo '2 part';
    }

?>
</body>
</html>