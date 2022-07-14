<?php

namespace App\Products;

abstract class Product
{
    protected $name;
    protected $unitOfMeasure;
    public $amount = 0;

    public function getName() {
        return $this->name;
    }

    public function getUnitOfMeasure() {
        return $this->unitOfMeasure;
    }
}