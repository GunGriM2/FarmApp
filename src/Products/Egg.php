<?php

namespace App\Products;

class Egg extends Product
{
    public function __construct()
    {
        $this->name = 'Яйцо';
        $this->unitOfMeasure = 'ед.';
    }
}