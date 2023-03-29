<?php

class Products {
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

    public function __toString(): string {
        return "$this->name ($this->weight lb): ₱ " . number_format($this->price, 2, '.',',');
    }
}?>