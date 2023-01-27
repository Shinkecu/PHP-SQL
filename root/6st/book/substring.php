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
    if (function_exists('mb_substr_replace') === false)
    {
        function mb_substr_replace($string, $replacement, $start, $length = null, $encoding = null)
        {
            if (extension_loaded('mbstring') === true)
            {
                $string_length = (is_null($encoding) === true) ? mb_strlen($string) : mb_strlen($string, $encoding);
               
                if ($start < 0)
                {
                    $start = max(0, $string_length + $start);
                }
               
                else if ($start > $string_length)
                {
                    $start = $string_length;
                }
               
                if ($length < 0)
                {
                    $length = max(0, $string_length - $start + $length);
                }
               
                else if ((is_null($length) === true) || ($length > $string_length))
                {
                    $length = $string_length;
                }
               
                if (($start + $length) > $string_length)
                {
                    $length = $string_length - $start;
                }
               
                if (is_null($encoding) === true)
                {
                    return mb_substr($string, 0, $start) . $replacement . mb_substr($string, $start + $length, $string_length - $start - $length);
                }
               
                return mb_substr($string, 0, $start, $encoding) . $replacement . mb_substr($string, $start + $length, $string_length - $start - $length, $encoding);
            }
           
            return (is_null($length) === true) ? substr_replace($string, $replacement, $start) : substr_replace($string, $replacement, $start, $length);
        }
    }
    



    $str = 'Дома приятно кушать ';
    echo "'$str'<br>'SQL' счетчик: ".mb_substr_count($str, 'SQL');
    echo '<hr>Позиция 27: '.mb_substr($str, 27);//




    echo '<hr>Позиция 4,длина 13: '.mb_substr($str, 4,13);




    //
    $sub = 'PHP & MySQL';
    $str = mb_substr_replace($str, $sub,0,3);
    echo "<hr>'$str'";

    
    
    ?>
</body>
</html>