<?php 
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Muslim";
$manager->sayHello("Ikhlash");

$vp = new VicePresident();
$vp->name = "Muslim";
$vp->sayHello("Danny");

?>