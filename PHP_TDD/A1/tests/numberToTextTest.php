<?php

require_once __DIR__ . '/../numberToText.php';

class numberToTextTest extends PHPUnit_Framework_TestCase {

    public function testIfReturnsCorrectValueFor17() {
        $this->assertEquals('siedemnaście', numberToText(17));
    }

    public function numbersProvider() {
        return [
            [33, 'trzydzieści trzy'],
            [0, 'zero'],
            [900, 'dziewięćset'],
            [501, 'pięćset jeden'],
            [300, 'trzysta'],
            [411, 'czterysta jedenaście'],
            [825, 'osiemset dwadzieścia pięć']
        ];
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testIfReturnCorrectStringForValidNumber($number, $text) {
        $this->assertEquals($text, numberToText($number));
    }

    public function testIfReturnCorrectoType() {
        $this->assertInternalType('string', numberToText(55));
    }

    public function testIsExpectedIsSame() {
        $expected = 'liczba poza zakresem lub brak liczby całkowitej';
        $this->assertSame($expected, numberToText(-4));
    }

    public function testIsExpectedIsEqual() {
        $expected = 'liczba poza zakresem lub brak liczby całkowitej';
        $this->assertEquals($expected, numberToText('string'));
    }

}
