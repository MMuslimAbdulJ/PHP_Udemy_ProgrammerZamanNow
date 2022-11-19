<?php 
require_once "data/Animal.php";

use Data\{Cat, Dog};

$cat = new Cat();
$cat->name = "Kitty";
$cat->run();

$dog = new Dog();
$dog->name = "Goofy";
$dog->run();

?>