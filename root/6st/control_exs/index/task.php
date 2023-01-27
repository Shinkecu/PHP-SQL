<?php
$cName = $_POST['city'];
$cName2 = $_POST['city2'];
$cName3 = $_POST['city3'];
$cName4 = $_POST['city4'];



function city_names($html){


        $html = htmlspecialchars($html);
        $res1 = strtolower($html);
        $res = ucfirst($res1);
        return $res;


}
$mass = [city_names($cName), city_names($cName2), city_names($cName3), city_names($cName4), ];
foreach($mass as $as){
    echo $as.'<br>';
}

?>
 
