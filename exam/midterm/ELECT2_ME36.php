<?php
    abstract class Arithmetic {
        abstract function add();
        abstract function subtract();
        abstract function multiply();
        abstract function divide();
    }

    class Calculator extends Arithmetic {
        public $i;
        public $j;


        public function __construct($i, $j) {
            $this->i = $i;
            $this->j = $j;
        }

        function add()
        {
            return $this->i + $this->j;
        }

        function subtract()
        {
            return $this->i - $this->j;
        }

        function multiply()
        {
            return $this->i * $this->j;
        }

        function divide()
        {
            return $this->i / $this->j;
        }
    }
?>