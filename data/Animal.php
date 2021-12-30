<?php

namespace Data;

require_once "Food.php";

abstract class Animals
{

    public string $name;

    // abstract function tidak boleh memiliki body
    // abstract funciion tidka boleh memiliki modifier Private
    abstract public function run(): void;
    //contravariance
    abstract public function eat(AnimalFood $animalFood): void;
}

// abstract function harus membuat turunannya semuanya.
class Cat extends Animals
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    //contravariance
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animals
{

    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    //contravariance
    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
