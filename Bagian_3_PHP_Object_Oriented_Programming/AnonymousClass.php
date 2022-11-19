<?php 

interface HelloWorld {
    public function sayHello() : void;
}

$hello = new class("Muslim") implements HelloWorld {
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello() : void {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$hello->sayHello();