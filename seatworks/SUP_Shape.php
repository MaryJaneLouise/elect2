<?php abstract class Shapes {
    abstract public function shapeArea();
    abstract public function shapeVolume();
}

// extending abstract class Cube
class Cube extends Shapes {
    protected $sideCube;

    public function __construct($sideCube) {
        $this->sideCube = $sideCube;
    }

    public function shapeArea() {
        return 6 * pow($this->sideCube, 2);
    }

    public function shapeVolume() {
        return pow($this->sideCube, 3);
    }
}

// extending abstract class Sphere
class Sphere extends Shapes {
    protected $radiusSphere;

    public function __construct($radiusSphere) {
        $this->radiusSphere = $radiusSphere;
    }

    public function shapeArea() {
        return 4 * pi() * pow($this->radiusSphere, 2);
    }

    public function shapeVolume() {
        return (4/3) * pi() * pow($this->radiusSphere, 3);
    }
}


?>
