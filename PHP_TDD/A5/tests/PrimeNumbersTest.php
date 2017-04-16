<?php

// require_once __DIR__ . '/../src/PrimeNumbers.php'; //dodany autoload w composer.json
require_once __DIR__.'/../vendor/autoload.php';

class PrimeNumbersTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException InvalidArgumentException
     */
    public function testIfThrowsInvalidArgumentExceptionWhenParamIsNotInt() {
        PrimeNumbers::generatePrimeFactors('vbc');
    }

    public function testIfReturnsCorrectArray() {
        $this->assertEquals([1, 2, 4, 8], PrimeNumbers::generatePrimeFactors(8));
    }

    public function testIfReturnsArrayType() {
        $this->assertInternalType('array', PrimeNumbers::generatePrimeFactors(66));
    }

    /**
     * @expectedException Exception
     */
    public function testIfParamIsZero() {
        PrimeNumbers::generatePrimeFactors(0);
    }

}
