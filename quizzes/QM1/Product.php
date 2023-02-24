<?php

abstract class Product {
    protected $productName;
    protected $productPrice;

    public function __construct($productName, $productPrice) {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getProductPrice() {
        return $this->productPrice;
    }

    abstract function displayMainDetails();
}

class Book extends Product {
    protected $bookAuthor;
    protected $bookGenre;

    public function __construct($productName, $productPrice, $bookAuthor, $bookGenre) {
        parent::__construct($productName, $productPrice);
        $this->bookAuthor = $bookAuthor;
        $this->bookGenre = $bookGenre;
    }

    public function displayMainDetails() {
        return "<br>Name: " . $this->productName
            . "<br>Price: " . $this->productPrice
            . "<br>Author: " . $this->bookAuthor
            . "<br>Genre: " . $this->bookGenre;
    }
}

class Movie extends Product {
    protected $movieDirector;
    protected $movieRating;

    public function __construct($productName, $productPrice, $movieDirector, $movieRating) {
        parent::__construct($productName, $productPrice);
        $this->movieDirector = $movieDirector;
        $this->movieRating = $movieRating;
    }

    public function displayMainDetails() {
        return "<br>Name: " . $this->productName
            . "<br>Price: " . $this->productPrice
            . "<br>Director: " . $this->movieDirector
            . "<br>Rating: " . $this->movieRating;
    }
}