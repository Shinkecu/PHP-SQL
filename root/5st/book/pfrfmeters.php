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
    function drink(string $tmp = 'горячий', string $flavor = 'чай'){
        //сюда  помещаються инструкциию
        echo "Пейте $tmp $flavor.<br>";
    }
    drink(); drink('холодный');drink('охлажденный','лимонад' );

    
    function add(int ...$numbers){
    $total = 0;
    foreach($numbers as $num){$total += $num;}
    echo "<hr>Итого: $total";
}
add(1,2,3);

    
    ?>
</body>
</html>