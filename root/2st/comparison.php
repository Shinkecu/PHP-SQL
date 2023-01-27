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
$zero = 0; $nil = 0; $one = 1; $upr = "A"; $lwr = "A";
echo "0 == 0: "; var_dump($zero == $nil);
echo "<br>0 == 1: "; var_dump($zero == $one);
echo "<br>A == a: "; var_dump($upr == $lwr);
echo "<br>A!= a: "; var_dump($upr == $lwr);

echo "<hr>1 > 0: "; var_dump($one > $nil);
echo "<br>0 >= 0: "; var_dump($zero >= $nil);
echo "<br>1 <= 0: "; var_dump($one <= $nil);
echo "<hr>1 <=> 0: "; var_dump($one <=> $nil);
echo "<br>1 <=> 1: "; var_dump($one <=> $one);
echo "<br>0 <=> 1: "; var_dump($nil <=> $one);

?>
</body>
</html>