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
    $a = $b = 5;
    function modify(int $val, int &$ref){
        //сюда вставляються инструкции.
        echo "Переданные значения: $val, $ref<br>";
        $val++;
        $ref++;
        echo "Инкрементированные значения: $val, $ref<hr>";
   }
   modify($a, $b);
   echo"Сохраненные значения: $a, $b";

    
    
    ?>
</body>
</html>