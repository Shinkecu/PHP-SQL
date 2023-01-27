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
        function greet(){
            echo 'Привет, пользователь!<br>';
        }
        greet();
        function outer()
        {
            function inner()
            {
                echo'Вложенная функция вызвана.<br>';
            }
            echo'Вложенная функция создана.<br>';
        }
    outer();
    inner();
    ?>

    
</body>
</html>