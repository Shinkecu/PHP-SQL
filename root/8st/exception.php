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
    function check_size($num)
    {
        if($num<10)
        {
            throw new 
            Exception("Число: $num<br>Значение должно быть больше 10");}
    }
    try {check_size(5);}
    catch(Exception $e)
    {   echo '<b>Исключение размера!</b><br>'.
        $e->getMessage().'<hr>';

    }
    class CustomException extends Exception{
        public function get_details()
    {
        $details = 'Файл: '.$this->getFile().
        '<br>Строка: '.$this->getLine().
        '<br>'.$this->getMessage();
        return $details;
    }
}
function check_parity($num)
{
    if($num% 2!== 0){
        throw new CustomException("Число: $num<br>Значение должно быть четным");
    }
}
try {
    check_parity(5);
}
catch(CustomException $e){
echo '<b> Исключение равенства!</b><br>'.
$e->get_details().'<hr>';
}
    
    
    ?>
</body>
</html>