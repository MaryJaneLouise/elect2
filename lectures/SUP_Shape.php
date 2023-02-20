<?php abstract class Shapes {
    abstract public function shapeArea();
    abstract public function shapeVolume();
}

// extending abstract class Cube
class Cube extends Shapes {
    protected $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function shapeArea() {
        return 6 * pow($this->length, 2);
    }

    public function shapeVolume() {
        return pow($this->length, 3);
    }
}

// extending abstract class Sphere
class Sphere extends Shapes {
    protected $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function shapeArea() {
        return 4 * M_PI * pow($this->length, 2);
    }

    public function shapeVolume() {
        return 4/3 * M_PI * pow($this->length, 3);
    }
}


?>
