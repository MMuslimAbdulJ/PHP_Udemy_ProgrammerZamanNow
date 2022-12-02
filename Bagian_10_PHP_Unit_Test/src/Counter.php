<?php 
namespace OpenDebugger62\Test;

class Counter {
    public int $counter = 0;

    public function increment() : void{
        $this->counter++;
    }

    public function getCounter():int{
        return $this->counter;
    }
}
?>