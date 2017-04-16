<?php

require_once __DIR__ . '/../wordWrap.php';

class WordWrapTest extends PHPUnit_Framework_TestCase {

    public function testIfReturnFalse() {
        $this->assertFalse(newWordWrap("string", "string"));
        $this->assertFalse(newWordWrap(22, 33));
    }

    public function testIfReturnCorrectType() {
        $this->assertInternalType('string', newWordWrap("string 22", 3));
        $this->assertInternalType('bool', newWordWrap("string 22", 3.11));
    }

    public function stringProvider() {
        return [
            ["GT WWW, uuu, zz", 3, "GT..."],
            ["zwykłe lorem ipsum", 10, "zwykłe..."],
            ["zwykłe lorem ipsum", 9, "zwykłe..."],
            ["zwykłe lorem ipsum", 900, "zwykłe lorem ipsum"],
            ["zwykłe lorem ipsum", 0, "..."],
            ["zwykłe lorem ipsum", 2, "..."]
        ];
    }

    /**
     * @dataProvider stringProvider
     */
    public function testIsReturnCorrectString($string, $length, $expected) {
        $this->assertEquals($expected, newWordWrap($string, $length));
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function testIfThrowsExceptionForForgottenValue() {
        newWordWrap();
        newWordWrap("string");
        newWordWrap(22);
    }

}
