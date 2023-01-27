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
    
    
    class Dog 
{

private $age;
private $weight;
private $color;

public function dark() {echo 'ГАВ! ГАВ! <br>';}

function __construct 
(int $yrs = 2, int $ibs = 8, string $fur = 'черного')
{
  $this->age = $yrs;
  $this->weight = $ibs;
  $this->color = $fur;
}

function __destruct() {echo 'Объект уичтожен!';}


public function getAge() {return $this->age;}
public function getWeight() {return $this->weight;}
public function getColor() {return $this->color;}

}

$fido = new Dog(3, 15, 'коричневого');
$pooch = new Dog(4, 18, 'серого ');
$rover = new Dog();


echo 'Шерсть Фидо '.$fido->getColor().' цвета<br>';

echo 'Фидо '.$fido->getAge().' года<br>';

echo 'Фидо весит '.$fido->getWeight().' кг<br>';
$fido->dark();

echo '<hr>Дворняжка: '.$pooch->getAge().' года';
echo $pooch->getWeight().' кг '.$pooch->getColor();

$pooch->dark();


echo '<hr>Рык: '.$rover->getAge().'года';
echo $rover->getWeight().' кг '.$rover->getColor();

$rover->dark();

     $items = get_class_vars('Dog');
echo '<br>Перемменные класса Dog: '.count($items);
echo '<br>Мeтоды класса Dog: ';
$items = get_class_methods('Dog');
foreach($items as $item) {echo "$item, ";}
    
    
    
    ?>
</body>
</html>