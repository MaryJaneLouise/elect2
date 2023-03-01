<?php

class SUP_Products {
    protected $name;
    protected $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProductName() {
        return $this->name;
    }

    public function getProductPrice() {
        return $this->price;
    }
}