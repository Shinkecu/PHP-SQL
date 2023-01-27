<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    $phrase = 'Правда редко бывает чистой';
    $author = 'Оскар Уайльд';

    echo $phrase;

    echo "<p>Часто говорят, что <q>$phrase</q></p>";
    $phrase = $phrase. ' и никогда не бывает простой';
    echo "<p><q>$phrase</q><cite>$author</cite></p>";
    ?>
</body>
</html>