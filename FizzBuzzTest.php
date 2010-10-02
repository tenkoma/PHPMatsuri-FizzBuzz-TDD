<?php
require_once 'FizzBuzz.php';
class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    public $object;
    public function setUp(){
        $this->object = new FizzBuzz();
    }
    public function testOne(){
    }
}
