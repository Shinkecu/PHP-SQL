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
    $yes = TRUE; $no = FALSE;
    $result = ($no && $no)? 'TRUE': 'FALSE';
    echo "no И no вернет $result <br>";
    $result = ($yes && $no)? 'TRUE': 'FALSE';
    echo "yes И no вернет $result <br>";

    $result = ($yes && $yes)? "TRUE": "FALSE";
    echo "yes И yes вернут $result <hr>";

    $result = ($no || $no)? 'TRUE': 'FALSE';
    echo "no ИЛИ no вернет $result <br>";
    $result = ($yes || $no)? 'TRUE': 'FALSE';
    echo "yes ИЛИ no вернет $result <br>";
    $result = ($yes || $yes)? 'TRUE': 'FALSE';
    echo "yes ИЛИ yes вернет $result <br>";
    $result = (! $yes)? 'TRUE': 'FALSE';
    echo "НЕ yes вернет $result <br>";
?>
</body>
</html>