<?php 
function foo() : void {
    echo "FOO" . PHP_EOL;
}
function bar() : void {
    echo "BAR" . PHP_EOL;
}
$functionName = "foo";
$functionName();
$functionName = "bar";
$functionName();

function sayHello(string $name, $filter) : void {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
sayHello("Muslim", "strtoupper");
sayHello("Muslim", "strtolower");
?>