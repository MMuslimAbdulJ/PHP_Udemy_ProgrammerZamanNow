<?php 
$firstName = "Muhammad Muslim";
$lastName = "Abdul Jabbaar";

$anonymousFunction = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$anonymousFunction();

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;
$arrowFunction();

$sum = fn(int $number1, int $number2) : int => $number1 + $number2;
echo $sum(2,3) . PHP_EOL;
?>