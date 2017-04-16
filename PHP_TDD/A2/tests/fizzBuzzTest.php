<?php

require __DIR__ . '/../fizzBuzz.php';

class fizzBuzzTest extends PHPUnit_Framework_TestCase {

    public function testIfReturnsCorrectValue() {
        $this->assertEquals('12Fizz4BuzzFizz78FizzBuzz11Fizz1314BuzzFizz', fizzBuzz(15));
        $this->assertEquals('12Fizz', fizzBuzz(3));
        $this->assertEquals('', fizzBuzz(0));
    }

    public function testIfReturnCorrectType() {
        $this->assertInternalType('string', fizzBuzz(654));
    }

    public function testIfReturnCorrectTypeIfValueIsIncorrect() {
        $this->assertInternalType('bool', fizzBuzz("string"));
        $this->assertInternalType('bool', fizzBuzz(-22));
        $this->assertInternalType('bool', fizzBuzz(1.1));
    }

    public function testIfReturnsString() {
        $actual = fizzBuzz(rand(0, 100));
        $this->assertInternalType('string', $actual);
    }

    public function testIfReturnsNonEmptyStringWhenParamIsGreaterThanZero() {
        $actual = fizzBuzz(rand(1, 100));
        $this->assertGreaterThan(0, strlen($actual));
    }

}
