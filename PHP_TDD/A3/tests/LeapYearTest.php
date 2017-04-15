<?php

require_once __DIR__ . '/../leapYear.php';

class LeapYearTest extends PHPUnit_Framework_TestCase {

    public function testIfReturnsCorrectValueFor2016() {
        $this->assertEquals(true, leapYear(2016));
    }

    public function testIfReturnsCorrectValueFor2015() {
        $this->assertEquals(false, leapYear(2015));
    }

    public function testIfReturnCorrectType() {
        $this->assertInternalType('boolean', leapYear(5));
    }

    /**
     * @expectedException RangeException
     */
    public function testIfThrowsRangeExceptionForOutOfRangeValue() {
        leapYear(-6);
    }

    /**
     * @expectedException Exception
     */
    public function testIfThrowsExceptionForStringAsValue() {
        leapYear("string");
    }

}
