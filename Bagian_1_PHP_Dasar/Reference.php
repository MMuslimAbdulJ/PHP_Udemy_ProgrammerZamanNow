<?php 
// Assign by reference
$name = "Muslim";
$otherName = &$name;
$otherName = "Ikhlash";
echo $name  . PHP_EOL;

// Pass by reference
function increment(int &$value) {
    $value++;
}
$counter = 1;
increment($counter);
echo $counter  . PHP_EOL;

// Returning references
function &getValue() {
    static $value = 100;
    return $value;
}
$a = &getValue();
echo $a . PHP_EOL;
$a = 200;
$b = &getValue();
echo $b . PHP_EOL
?>