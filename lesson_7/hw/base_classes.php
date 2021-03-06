<?php

require_once 'interfaces.php';

abstract class Goods implements IGood{


    protected $article;
    protected $name;
    protected $price;
    protected $weight;
    protected $discount = 0;


    const VAT = 18;

    public function __construct(int $article, string $name, float $price, float $weight)
    {
        $this->article = $article;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getPrice()
    {
        return $this->price - $this->price * $this->discount / 100;
    }

    public function getPriceExclVAT()
    {
        return round(($this->getPrice() / (1 + self::VAT/100)), 2, PHP_ROUND_HALF_UP);
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
        echo $discount;
    }

    public function getFullName()
    {
        return "$this->name Цена: $this->price Вес: $this->weight";
    }

}