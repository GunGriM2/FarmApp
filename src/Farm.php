<?php

namespace App;

use App\Animals\Animal;

class Farm
{
    private array $animals = array();
    private array $storage = array();

    public function addAnimal(Animal $animal) {
        $id = count($this->animals, COUNT_RECURSIVE);
        $this->animals[$animal->getSpeciesName()][$id] = $animal;
    }

    public function collectProducts() {
        foreach ($this->animals as $animalType) {
            foreach ($animalType as $animal) {
                $product = $animal->giveProduct();
                $this->storage[$product->getName()][] = $product;
            }
        }
    }

    public function animalsInfo() {
        echo '<br> Животные на ферме <br> ================== <br>';
        foreach ($this->animals as $animalTypeKey => $animalTypeArray) {
            echo $animalTypeKey . ': ' . count($animalTypeArray) . '<br>';
        }
    }

    public function storageInfo() {
        echo '<br> Продукция на ферме <br> ================== <br>';
        foreach ($this->storage as $productType => $products) {
            $numberOfProductType = 0;
            $productUnitOfMeasure = '';
            foreach ($products as $product) {
                if ($productUnitOfMeasure == '')
                    $productUnitOfMeasure = $product->getUnitOfMeasure();
                $numberOfProductType += $product->amount;
            }
            echo $productType . ': ' . $numberOfProductType . ' ' . $productUnitOfMeasure .'<br>';
        }
    }

}