<?php 
function sayHello($name) : void {
    echo "Hello $name!" . PHP_EOL;
}
sayHello("Muslim");

function helloWorld($value = "Anonymous") {
    echo "Hello $value" . PHP_EOL;
}
helloWorld();

function sum(int $number1, int $number2) {
    echo $total = $number1 + $number2  . PHP_EOL;
}
sum(2,3);

function sumArray1(...$values){
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo $total  . PHP_EOL;
}
sumArray1(1,2,3,4,5);

function sumArray2(array $values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo $total  . PHP_EOL;
}
sumArray2([1,2,3,4,5]);

function sumArray3(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo $total  . PHP_EOL;
}
$arrayNumber = [1,2,3,4,5];
sumArray3(...$arrayNumber);
?>