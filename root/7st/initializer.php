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

public function setValues (int $yrs = 2, int $ibs = 8, string $fur = 'черного')
{
  $this->age = $yrs;
  $this->weight = $ibs;
  $this->color = $fur;
}

public function getAge() {return $this->age;}
public function getWeight() {return $this->weight;}
public function getColor() {return $this->color;}
}

$fido = new Dog();
$pooch = new Dog();
$rover = new Dog();

$pooch->setValues(4, 18, 'серого');
$fido->setValues(3, 15, 'коричневого');
$rover->setValues();

echo 'Шерсть Фидо '.$fido->getColor().' цвета<br>';
echo 'Фидо '.$fido->getAge().' года<br>';
echo 'Фидо весит '.$fido->getWeight().' кг<br>';

echo '<hr>Дворняжка: '.$pooch->getAge().' года';
echo $pooch->getWeight().' кг '.$pooch->getColor();

echo '<hr>Рык: '.$rover->getAge().'года';
echo $rover->getWeight().' кг '.$rover->getColor();

$fido->dark();
$pooch->dark();
$rover->dark();

    ?>
</body>
</html>