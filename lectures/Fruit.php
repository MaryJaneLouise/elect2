<?php

namespace BonusFormUsage;

class Fruit
{
    protected $name;
    protected $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }
}