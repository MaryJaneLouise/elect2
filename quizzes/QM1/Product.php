<?php

abstract class Product {
    protected $productName;
    protected $productPrice;

    public function __construct($productName, $productPrice) {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
    }

    abstract function display();

    public function getProductName() {
        return $this->productName;
    }

    public function getProductPrice() {
        return $this->productPrice;
    }

    public function setProductPrice($productPrice) {
        $this->productPrice = $productPrice;
    }
}

class Book extends Product {
    protected $bookAuthor;
    protected $bookGenre;

    public function __construct($productName, $productPrice, $bookAuthor, $bookGenre) {
        parent::__construct($productName, $productPrice);
        $this->bookAuthor = $bookAuthor;
        $this->bookGenre = $bookGenre;
    }

    public function getBookAuthor() {
        return $this->bookAuthor;
    }

    public function getBookGenre() {
        return $this->bookGenre;
    }

    public function display() {
        return "<br>Name: " . $this->productName
            . "<br>Author: " . $this->bookAuthor
            . "<br>Genre: " . $this->bookGenre
            . "<br>Price: " . $this->productPrice;
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

    public function getMovieDirector() {
        return $this->movieDirector;
    }

    public function getMovieRating() {
        return $this->movieRating;
    }

    public function display() {
        return "<br>Name: " . $this->productName
            . "<br>Director: " . $this->movieDirector
            . "<br>Rating: " . $this->movieRating
            . "<br>Price: " . $this->productPrice;
    }
}