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

    $letters = array('А', 'Б', 'В');
    $numbers = array(1, 2, 3); $matrix =
    array('Буква' => $letters, 'Число' => $numbers );

    echo "<p>Начало: {$matrix['Буква'][0]} </p>";
    foreach($matrix as $array => $list)
    {
        echo '<ul>';
        foreach($list as $key => $value)
        {echo "<li>$array [$key] = $value ";}
        echo '</ul>';

    }

    ?>
</body>
</html>