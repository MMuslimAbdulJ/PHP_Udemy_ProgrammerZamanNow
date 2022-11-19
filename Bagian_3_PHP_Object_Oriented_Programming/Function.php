<?php 
require_once "data/Person.php";

$muslim = new Person("Muslim", "Cianjur");
$muslim->name = "Muhammad Muslim Abdul Jabbaar";
$muslim->address = "Cianjur";
$muslim->country = "Indonesia";
$muslim->sayHello("Danny");

$ikhlash = new Person("Ikhlash", "Cianjur");
$ikhlash->name = "Ikhlash";
$ikhlash->address = "Cianjur";
$ikhlash->country = "Indonesia";
$ikhlash->sayHello(null);

$muslim->info();
$ikhlash->info();
?>