<?php

namespace App\Animals;

class Chicken extends Animal
{
    public function __construct()
    {
        $this->speciesName = 'Курица';
        $this->productType = 'App\Products\Egg';
    }

    protected function productAmount() : int
    {
        return rand(0, 1);
    }

    public function giveProduct()
    {
        $product = new $this->productType();
        $product->amount = $this->productAmount();
        return $product;
    }
}