<?php 
require_once "helper/MathHelper.php";
use Helper\MathHelper;

echo MathHelper:: $name . PHP_EOL;
MathHelper::$name = "Muslim";
echo MathHelper::$name . PHP_EOL;