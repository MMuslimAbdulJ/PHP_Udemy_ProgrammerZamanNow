<?php 
namespace Data;
require_once "Food.php";
use AnimalFood;
use Food;

abstract class Animal {
    public string $name;

    abstract public function run();

    abstract function eat(AnimalFood $animalFood);
}

class Cat extends Animal {
    public function run() {
        echo "My Cat $this->name, is running" . PHP_EOL;
    } 

    public function eat(AnimalFood $animalFood)
    {
        echo "Cat is eating | ". get_class($animalFood) . PHP_EOL;
    }
}

class Dog extends Animal {
    public function run() {
        echo "My Dog $this->name, is running" . PHP_EOL;
    }

    public function eat(Food $food)
    {
        echo "Dog is eating | ". get_class($food). PHP_EOL;
    }
}

?>