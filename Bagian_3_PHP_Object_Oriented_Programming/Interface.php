<?php 

require_once "data/Car.php";

use Data\{Avanza};

$car = new Avanza();
echo $car->drive() . PHP_EOL;
echo $car->getTire() . PHP_EOL;
echo $car->getBrand() . PHP_EOL;
echo $car->isMaintenance() . PHP_EOL;

?>