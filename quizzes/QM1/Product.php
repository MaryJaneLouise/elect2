<?php

class Product {
    public $ProductName;
    public $ProductPrice;

    public function __construct($ProductName, $ProductPrice) {
        $this->ProductName = $ProductName;
        $this->ProductPrice = $ProductPrice;
    }

    public function display() {
        echo $this->ProductName . "<br>" . $this->ProductPrice;
    }
}