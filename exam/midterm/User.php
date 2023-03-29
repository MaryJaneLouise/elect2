<?php

class User {
    protected string $name;
    protected float $moneyLimit;

    /**
     * @param string $name
     * @param float $moneyLimit
     */
    public function __construct(string $name, float $moneyLimit) {
        $this->name = $name;
        $this->moneyLimit = $moneyLimit;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMoneyLimit(): float {
        return $this->moneyLimit;
    }

    public function setMoneyLimitUser(float $spendLimit): void {
        $this->moneyLimit = $spendLimit;
    }
}