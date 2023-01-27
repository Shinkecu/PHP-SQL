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
    $ret_res = 0;
    
        function arithmetic($num1, $num2,$operator){
            if ($operator === "+"){
                $ret_res = $num1 + $num2;     
            }
            elseif ($operator === "-"){
                $ret_res = $num1 - $num2;     
            }
            elseif ($operator === "/"){
                $ret_res = $num1 / $num2;     
            }
            elseif ($operator === "*"){
                $ret_res = $num1 * $num2;     
            }
            else {
                echo 'Неизвестная операция';
            }
            echo $ret_res;
            
        }
        $result = arithmetic(1,3, "+");

    
    
    
    ?>
</body>
</html>