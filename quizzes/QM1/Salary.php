<?php

abstract class Salary {
    abstract public function calculate13MonthPay();
    abstract public function calculateHourlyRate();
}

class Employee extends Salary {
    protected $name;
    protected $salary;
    protected $monthsOfStay;

    public function __construct($name, $salary, $monthsOfStay) {
        $this->$name;
        $this->$salary;
        $this->$monthsOfStay;
    }

    public function calculateHourlyRate() {
        return $this->salary / 24 / 8;
    }

    public function calculate13MonthPay() {
        return ($this->salary * $this->monthsOfStay) / 12;
    }
}

class Manager extends Salary {
    protected $name;
    protected $salary;
    protected $monthsOfStay;

    public function __construct($name, $salary, $monthsOfStay) {
        $this->$name;
        $this->$salary;
        $this->$monthsOfStay;
    }

    public function calculateHourlyRate() {
        return $this->salary / 24 / 8;
    }

    public function calculate13MonthPay() {
        return "Not entitled for 13th month pay";
    }
}