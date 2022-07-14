<?php

require_once realpath("vendor/autoload.php");

use App\Farm;
use App\Animals\Cow;
use App\Animals\Chicken;


$farm = new Farm();

for ($i = 0; $i < 10; $i++) {
    $farm->addAnimal(new Cow());
}

for ($i = 0; $i < 20; $i++) {
    $farm->addAnimal(new Chicken());
}

$farm->animalsInfo();

for ($i = 0; $i < 7; $i++) {
    $farm->collectProducts();
}

$farm->storageInfo();

for ($i = 0; $i < 5; $i++) {
    $farm->addAnimal(new Chicken());
}

$farm->addAnimal(new Cow());

$farm->animalsInfo();

for ($i = 0; $i < 7; $i++) {
    $farm->collectProducts();
}

$farm->storageInfo();