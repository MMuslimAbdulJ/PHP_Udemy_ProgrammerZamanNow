<?php 
function sayHello(string $name, callable $filter) : void {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}
sayHello("Muslim", "strtoupper");
sayHello("Muslim", "strtolower");
sayHello("Muslim", function(string $name) : string {
    return strtoupper($name);
});
sayHello("Muslim", fn(string $name) : string => strtolower($name));
?>