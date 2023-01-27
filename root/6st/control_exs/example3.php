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



$string = "gp_kali_linux_pol";

$tok = strtok($string, " \_ ");

while ($tok !== false) {
    echo ucwords($tok);
    $tok = strtok(" \_");
}




    ?>
</body>
</html>