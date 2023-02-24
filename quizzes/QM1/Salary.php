<?php

abstract class Salary {
    protected $name;
    protected $salary;
    protected $monthsOfStay;

    public function __construct($name, $salary, $monthsOfStay) {
        $this->name = $name;
        $this->salary = $salary;
        $this->monthsOfStay = $monthsOfStay;
    }

    public function getPersonName() {
        return $this->name;
    }

    public function getPersonSalary() {
        return $this->salary;
    }

    public function getPersonMonthsOfStay() {
        return $this->monthsOfStay;
    }

    abstract public function calculate13MonthPay();
    abstract public function calculateHourlyRate();
}

class Employee extends Salary {
    public function calculateHourlyRate() {
        return round($this->salary / 24 / 8, 2);
    }

    public function calculate13MonthPay() {
        return round(($this->salary * $this->monthsOfStay) / 12, 2);
    }
}

class Manager extends Salary {
    public function calculateHourlyRate() {
        return round($this->salary / 24 / 8, 2);
    }

    public function calculate13MonthPay() {
        return "Not entitled for 13th month pay";
    }
}