<?php 
namespace OpenDebugger62\Test;
use PHPUnit\Framework\TestCase;
use OpenDebugger62\Test\Counter;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase {
    private Counter $counter;

    public function setUp() : void {
        $this->counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }

    public function testIncrement() {
        Assert::markTestIncomplete("Unit Test belum selesai dibuat");
        Assert::assertEquals(0, $this->counter->getCounter());
    }

    public function testCounter() {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());
        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment() {
        self::markTestSkipped("Test di-skip dulu");
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst() : Counter {
        $this->counter->increment();
        $this->counter->increment();
        Assert::assertEquals(2, $this->counter->getCounter());
        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter) {
        $counter->increment();
        Assert::assertEquals(3, $counter->getCounter());
    }

    // public function testOther(){
    //     echo "Other" . PHP_EOL;
    // }

    protected function tearDown() :void {
        echo "Tear Down" . PHP_EOL;
    }

    /**
     * @after
     */
    protected function after() : void {
        echo "After" . PHP_EOL;
    }

    /**
     * @requires OSFAMILY Windows
     */
    public function testOnlyWindows() {
        self::assertTrue(true, "Only in Windows");
    }

    /**
     * @requires OSFAMILY Linux
     * @requires PHP >= 8
     */
    public function testLinuxPHP8(){
        self::assertTrue(true, "Only runs on Linux and PHP >= 8");
    }
}
