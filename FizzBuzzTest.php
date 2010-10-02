<?php
require_once 'FizzBuzz.php';
class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    public $object;
    public function setUp(){
        $this->object = new FizzBuzz();
    }
    public function testOne(){
        $this->assertEquals(1, $this->object->say(1));
    }

    public function testTwo(){
        $this->assertEquals(2, $this->object->say(2));
    }

    public function testThree(){
        $this->assertEquals('Fizz', $this->object->say(3));
    }
}
