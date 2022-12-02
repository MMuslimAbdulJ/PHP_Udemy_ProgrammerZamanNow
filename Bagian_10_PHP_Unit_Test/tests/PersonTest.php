<?php 

namespace OpenDebugger62\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use OpenDebugger62\Test\Person;

class PersonTest extends TestCase {

    private Person $person;

    // public function setUp():void{
    //     $this->person = new Person("Muslim");
    // }
    
    /**
     * @before
     */
    public function createPerson() :void{
        $this->person = new Person("Muslim");
    }
    public function testSuccess(){
        $this->assertEquals("Hello Ikhlash, my name is Muslim", $this->person->sayHello("Ikhlash"));
    }

    public function testException(){
        $this->expectException(Exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput() : void {
        $this->expectOutputString("Good bye Danny"  . PHP_EOL);
        $this->person->sayGoodBye("Danny");
    }
}

?>