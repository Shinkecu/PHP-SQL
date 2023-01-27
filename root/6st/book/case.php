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
    $str = "С== с помощью хороших алгаритмов";
    echo "Исходная строка: '$str'<hr>";
    $ver = strtolower($str);
    echo "Строчные буквы: '$ver' <hr>";
    $ver = mb_strtoupper($str);
    echo "Прописные буквы: '$ver' <hr>";
    $ver = ucfirst(strtolower($str));
    echo 'Прописная первая буква каждого слова: '.ucwords($ver);
    
    
    
    
    ?>
</body>
</html>