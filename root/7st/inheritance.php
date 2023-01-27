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
    class Polygon

    {
      private $width, $height;
  
      function __construct(int $w = 4, int $h = 5)
      {
        $this->width = $w;
        $this->height = $h;
      }
  
      public function getWidth() {return $this->width;}
      public function getHeight() {return $this->height;}
    }
  
    class Rectangle extends Polygon
    {
      public function area()
      {
        return ($this->getWidth() * $this->getHeight());
      }
    }
  
  
    class Triangle extends Polygon
    {
      public function area()
      {
        return ($this->getWidth() * $this->getHeight() / 2);
      }
    }
  
    $rect = new Rectangle();
    $trico = new Triangle();
  
    echo 'Площадь прямоугольника: '.$rect->area().'<hr>';
    echo 'Площадь треугольника: '.$trico->area();


    
    
    ?>
</body>
</html>