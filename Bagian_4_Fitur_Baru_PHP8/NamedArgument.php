<?php 

function sayHello(string $first, string $second, string $third = "", string $forth):void{
    echo "Hello $first $second $third $forth" . PHP_EOL;
}

// without named argument
sayHello("Muhammad", "Muslim", "Abdul", "Jabbaar");

// with named argument
sayHello(third: "Abdul", second :  "Muslim", forth : "Jabbaar", first: "Muhammad");
sayHello(second :  "Muslim", forth : "Jabbaar", first: "Muhammad");