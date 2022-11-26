<?php 
require_once __DIR__ . '/vendor/autoload.php';
use OpenDebugger62\BelajarLibrary\Customer;

$customer = new Customer("Muslim");
echo $customer->sayHello() . PHP_EOL;
$customer = new Customer("Muslim");
echo $customer->sayHello("Danny") . PHP_EOL;
?>