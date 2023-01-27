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
    public function bark() {echo 'Гав! Гав! <br>';}
    public function setAge (int $yrs)
    {$this->age = $yrs;}
    public function setWeight (int $lbs)
    {$this->weight = $lbs;}
    public function setColor (string $fur)
    {$this->color = $fur;}
    public function getAge() {return $this->age;}
    public function getWeight() {return $this -> weight;}
    public function getColor() {return $this->color;}
}
$fido = new Dog();
$fido ->setAge(3);
$fido ->setWeight(15);
$fido->setColor('коричневого ');
echo 'Шерсть Фидо '.$fido->getColor().'цвета<br>';
echo 'Фидо '.$fido->getAge().'года<br>';
echo 'Фидо весит '.$fido->getWeight().' кг<br>';
$fido->bark();


?>
</body>
</html>