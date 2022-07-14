<?php

namespace App\Animals;

class Cow extends Animal
{
    public function __construct()
    {
        $this->speciesName = 'Корова';
        $this->productType = 'App\Products\Milk';
    }

    protected function productAmount() : int
    {
        return rand(8, 12);
    }

    public function giveProduct()
    {
        $product = new $this->productType();
        $product->amount = $this->productAmount();
        return $product;
    }
}