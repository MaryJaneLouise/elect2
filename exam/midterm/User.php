<?php
abstract class ProductCalculation {
    abstract function getTotalSpend();
    abstract function getRemainingBalance();
}

class User {
    protected string $name;
    protected float $moneyLimit;
    protected array $products;

    public function __construct(string $name, float $moneyLimit, array $products) {
        $this->name = $name;
        $this->moneyLimit = $moneyLimit;
        $this->products = $products;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getProduct(): array {
        return $this->products;
    }

    public function setProducts(array $products): void {
        $this->products = $products;
    }

    public function getMoneyLimit(): float {
        return $this->moneyLimit;
    }

    public function getTotalSpend() {
        $priceTotal = 0;
        foreach ($this->products as $product) {
            $priceTotal += $product->getProductPrice();
        }
        return $priceTotal;
    }

    public function getRemainingBalance() {
        return $this->moneyLimit - $this->getTotalSpend();
    }

    public function setMoneyLimitUser(float $spendLimit): void {
        $this->moneyLimit = $spendLimit;
    }
}