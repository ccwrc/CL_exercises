<?php

require_once __DIR__ . '/../numberToWords.php';

class numberToWordsTest extends PHPUnit_Framework_TestCase {

    public function testIfReturnsCorrectValueFor17() {
        $this->assertEquals('siedemnaście', numberToWords(17));
    }

    public function numbersProvider() {
        return [
            [33, 'trzydzieści trzy'],
            [0, 'zero'],
            [900, 'dziewięćset'],
            [501, 'pięćset jeden'],
            [300, 'trzysta'],
            [411, 'czterysta jedenaście']
        ];
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testIfReturnCorrectStringForValidNumber($number, $text) {
        $this->assertEquals($text, numberToWords($number));
    } // number->text -> klucz->wartosc

    /**
     * @expectedException UnexpectedValueException
     */
    public function testIfThrowsExceptionForForNonIntegerValue() {
        numberToWords('hello word');
    }

    /**
     * @expectedException RangeException
     */
    public function testIfThrowsExceptionForOutOfRangeValue() {
        numberToWords(-3);
    }

    public function testIfReturnCorrectoType() {
        $this->assertInternalType('string', numberToWords(55));
    }

//    public function testSimple() {
//        $this->assertEquals('simple', $GLOBALS['simpleVar']);
//        $this->assertEquals('747', $_POST['testVar']);
//    }
}
