<?php 
require_once "data/SayGoodbye.php";

use Data\Traits\Person;

$goodbye = new Person();
$goodbye->sayGoodbye("Danny");

$hello = new Person();
$hello->sayHello("Ikhlash");
$hello->name = "Arfah";
var_dump($hello);

$hello->run();
?>