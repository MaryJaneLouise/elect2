<?php

require_once 'Product.php';

class Movie extends Product {
    public $director;
    public $rating;

    public function Movie() {
        echo $this->director . "<br>" . $this->rating;
    }
}