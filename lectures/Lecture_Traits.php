<?php trait Car {
    // properties
    private $make;
    private $model;
    private $year;

    // constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // methods
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
        echo "This car is a " . $this->make . " " . $this->model . " from " . $this->year . ".";
    }
}

class Toyota {
    use Car;

    // constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}

class Honda {
    use Car;

    // constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}

// creating objects
$car1 = new Toyota("Corolla", "SE", 2022);
$car2 = new Honda("Civic", "Sport", 2021);

// using methods
echo $car1->getMake(); // Output: Corolla
echo $car2->getModel(); // Output: Sport
$car1->displayInfo(); // Output: This car is a Corolla SE from 2022.?>
