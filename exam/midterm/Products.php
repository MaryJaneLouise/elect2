<?php

abstract class Calculator {
    abstract function add($i, $j);
    abstract function subtract($i, $j);
    abstract function multiply($i, $j);
    abstract function divide($i, $j);
}


class Products extends Calculator {
    protected string $name;
    protected float $price;
    protected float $weight;

    public function __construct(string $name, float $price, float $weight) {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getProductName(): string {
        return $this->name;
    }

    public function getProductPrice(): float {
        return $this->price;
    }

    public function getProductWeight(): float {
        return $this->weight;
    }

    function add($i, $j) {
        return $i + $j;
    }

    function subtract($i, $j) {
        return $i - $j;
    }

    function multiply($i, $j) {
        return $i * $j;
    }

    public function divide($i, $j) {
        return $i / $j;
    }

    public function __toString(): string {
        return "$this->name ($this->weight lb): " . number_format($this->price, 2, '.',',');
    }
}?>