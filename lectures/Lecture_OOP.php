<!DOCTYPE html>

<?php

// class Fruit{
//PROPERTIES
// public $name;
// public $color;


// //METHODS
// function setName($name){
//     $this->name = $name;
// }

// function getName(){
//     return $this->name;
// }

// function setColor($color){
//     $this->color = $color;
// }

// function getColor(){
//     return $this->color;
// }

// }

class Fruit{
    protected $name;
    protected $color;
    const INIT_MESSAGE = "Fruit Characteristics";

    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    function getInitialMessage(){
        return self::INIT_MESSAGE;
    }

    function getName(){
        return  $this->name;
    }

    function getColor(){
        return $this->color;
    }
}

class Strawberry extends Fruit{

    private $weight;
    public function __construct($name, $color, $weight){

        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;

    }

    public function message(){
        echo "I am here";
    }

    public function getColor(){
        echo "The color is:  {$this->color}";
    }
}

//echo Fruit::INIT_MESSAGE;

// $berry = new Strawberry("Strawberry", "Red", 50);
// // echo $berry->getName();
// echo $berry->getColor();
// $berry->message();

$fruit = new Fruit("Apple", "Red");
echo $fruit->getInitialMessage();
// $fruit2 = new Fruit("Banana", "Yellow");


// echo $fruit->getName();
// echo $fruit->getColor();


// echo "</br>";
// echo "</br>";

// echo $fruit2->getName();
// echo $fruit2->getColor();

// $Fruit = new Fruit();
// $Fruit->setName("Apple");
// $Fruit->setColor("Red");





?>




<html>
<head>

</head>

<body>


</body>

</html>