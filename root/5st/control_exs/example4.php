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
    function season($month){
        if($month >= 3 && $month < 6){
            $season_time = "Весна";
        }
        elseif($month >= 6 && $month < 9){
            $season_time = "Лето";
        }
        elseif($month >= 9 && $month < 11){
            $season_time = "Осень";
        }
        elseif($month > 0 && $month <=12){
            $season_time = "Зима";
        }
        return $season_time;
    }
    echo season(4);
    
    
    ?>
</body>
</html>