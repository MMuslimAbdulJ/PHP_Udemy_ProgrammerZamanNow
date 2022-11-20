<?php 

trait sampleTrait {
    public abstract function sampleFunction(string $name) : string;
}

class sampleTrait {
    use sampleTrait;
    public function sampleFunction(int $name): int
    {
        return 1;
    }
}
