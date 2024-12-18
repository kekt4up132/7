<?php

// Подключаем автозагрузку Composer
require 'vendor/autoload.php';

// Используем пространство имен для классов
use AnimalProject\Dog;
use AnimalProject\Cat;

// Создаем экземпляры классов
$dog = new Dog();
$cat = new Cat();

// Выводим информацию о животных
echo $dog->getInfo() . PHP_EOL; // Вывод: Тип: AnimalProject\Dog, Звук: Гав
echo $cat->getInfo() . PHP_EOL; // Вывод: Тип: AnimalProject\Cat, Звук: Мяу
