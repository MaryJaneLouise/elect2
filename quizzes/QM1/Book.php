<?php

require_once 'Product.php';

class Book extends Product {
    public $author;
    public $genre;

    public function Book() {
        echo $this->author . "<br>" . $this->genre;
    }
}