<?php abstract class Car {
    // properties
    protected $make;
    protected $model;
    protected $year;

    // constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // abstract methods
    abstract public function getMake();
    abstract public function getModel();
    abstract public function getYear();
    abstract public function displayInfo();
}

// extending abstract class
class Toyota extends Car {
    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function displayInfo() {
        echo "This Toyota car is a " . $this->make . " " . $this->model . " from " . $this->year . ".";
    }
}

// extending abstract class
class Honda extends Car {
    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function displayInfo() {
        echo "This Honda car is a " . $this->make . " " . $this->model . " from " . $this->year . ".";
    }
}

// creating objects
$car1 = new Toyota("Corolla", "SE", 2022);
$car2 = new Honda("Civic", "Sport", 2021);

// using methods
echo $car1->getMake(); // Output: Corolla
echo $car2->getModel(); // Output: Sport
$car1->displayInfo(); // Output: This Toyota car is a Corolla SE from 2022.?>
