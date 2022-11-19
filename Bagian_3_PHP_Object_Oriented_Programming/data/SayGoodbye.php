<?php 

namespace Data\Traits;

trait SayGoodbye {
    public function sayGoodbye(?string $name) : void {
        if(is_null($name)) {
            echo "Goodbye" . PHP_EOL;
        } else {
            echo "Goodbye $name" . PHP_EOL;
        }
    }
}
trait SayHello {
    public function sayHello(?string $name) : void {
        if(is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait CanRun {
    abstract public function run() : void;
}

class ParentPerson {
    public function sayHello(?string $name) : void
    {
        if (is_null($name)) {
            echo "Hello in Person" . PHP_EOL;
        } else {
            echo "Hello in Person, $name" . PHP_EOL;
        }
    }
    public function sayGoodbye(?string $name) : void
    {
        if (is_null($name)) {
            echo "Goodbye in Person" . PHP_EOL;
        } else {
            echo "Goodbye in Person, $name" . PHP_EOL;
        }
    }
}

trait All {
    use SayGoodbye, SayHello, HasName, CanRun {
        // SayGoodbye as private;
        // SayHello as private;
    }
}

class Person extends ParentPerson {
    
    use All;

	public function run() : void {
        echo "Person $this->name is running"  . PHP_EOL;
    }

    // public function sayGoodbye(?string $name)
    // {
    //     if (is_null($name)) {
    //         echo "Goodbye child " . PHP_EOL;
    //     } else {
    //         echo "Goodbye child, $name" . PHP_EOL;
    //     }
    // }
    // public function sayHello(?string $name): void
    // {
    //     if (is_null($name)) {
    //         echo "Hello child" . PHP_EOL;
    //     } else {
    //         echo "Hello child, $name" . PHP_EOL;
    //     }
    // }
    
}

?>