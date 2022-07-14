<?php

namespace App\Products;

class Milk extends Product
{
    public function __construct()
    {
        $this->name = 'Молоко';
        $this->unitOfMeasure = 'л.';
    }
}