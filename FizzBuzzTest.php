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

    public function testFour(){
        $this->assertEquals(4, $this->object->say(4));
    }

    public function testFive(){
        $this->assertEquals('Buzz', $this->object->say(5));
    }

    public function testSix(){
        $this->assertEquals('Fizz', $this->object->say(6));
    }

    public function testTen(){
        $this->assertEquals('Buzz', $this->object->say(10));
    }

    public function testFifteen(){
        $this->assertEquals('FizzBuzz', $this->object->say(15));
    }
}
