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

    
    function cut_comment($str){ 
    $len = strlen($str);
    $inp = strpos($str,'/*');
    $out = strrpos($str, '*/');
    $res1 = substr($str, 0,$inp);
    $res2 = substr($str, $out+2,$len);
    $fin_res = $res1.$res2;
    return $fin_res;
    }

    echo cut_comment("hello world my name is /*fefdfe*/ Giorno Gavanna");
    

    //



    ?>
</body>
</html>