<?php 
require_once __DIR__ . '/vendor/autoload.php';

use OpenDebugger62\Data\People;

$muslim = new People("Muslim");
echo $muslim->sayHello("Ikhlash") . PHP_EOL;
?>