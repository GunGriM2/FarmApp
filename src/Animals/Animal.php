<?php

namespace App\Animals;

abstract class Animal
{
    protected $speciesName;
    protected $productType;

    public function getSpeciesName()
    {
        return $this->speciesName;
    }

    abstract function giveProduct();
    abstract protected function productAmount();
}