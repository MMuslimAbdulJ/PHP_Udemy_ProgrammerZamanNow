<?php 

class Manager {
    private function test() : void {

    }
}

class VP extends Manager {
    public function test(string $name): string {
        return "VP";
    }
}

?>