<?php

namespace AnimalProject;

abstract class Animal
{
    abstract public function makeSound(): string;

    public function getType(): string
    {
        return static::class;
    }

    public function getInfo(): string
    {
        return sprintf("Тип: %s, Звук: %s", $this->getType(), $this->makeSound());
    }
}
