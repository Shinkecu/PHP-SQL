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
        $mass = array('k1' => 12,'k2' => 23,'k3' => 43,'k4' => 0,'k5' => 98);
        foreach($mass as $i => $x){
            
            if($x == 0){
                break;
            }
            echo $x . '<br>';
        }


        ?>
</body>
</html>