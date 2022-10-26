<?php
$sayHello = function (string $name): void {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Muslim");

$sayGoodbye = function (string $name, $filter): void {
    $finalName = $filter($name);
    echo "Goodbye $finalName" . PHP_EOL;
};
$sayGoodbye("Muslim", function (string $name): string {
    return strtoupper($name);
});
$func1 = function (string $name): string {
    return strtoupper($name);
};
$sayGoodbye("Danny", $func1);

$firstName = "Muhammad Muslim";
$lastName = "Abdul Jabbaar";
$apaKabar = function () use ($firstName, $lastName): void {
    echo "Bagaimana kabarmu hari ini $firstName $lastName?" . PHP_EOL;
};
$apaKabar();
