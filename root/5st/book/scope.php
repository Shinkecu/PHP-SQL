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
    $number = 1; echo "Глобальные число: $number<br>";
    function show_local(){
        $number = 100; echo "Локальное число $number<hr>";
    }
    show_local();
function recur()
    {
        global $number; static $letter = 'A';
        if($number < 14)
        {
            echo "$number:$letter | ";
            $number++; $letter++; recur();
        }
}
recur();
echo "<hr>Глобальное число: $number";

    
    
    ?>
</body>
</html>