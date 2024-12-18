<?php

require 'vendor/autoload.php';

use AnimalProject\Dog;
use AnimalProject\Cat;

$dog = new Dog();
$cat = new Cat();

echo $dog->getInfo() . PHP_EOL;
echo $cat->getInfo() . PHP_EOL;