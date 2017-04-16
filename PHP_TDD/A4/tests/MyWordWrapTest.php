<?php

require_once __DIR__ . '/../myWordWrap.php';

class MyWordWrapTest extends PHPUnit_Framework_TestCase {

    public function testIfReturnsString() {
        $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $this->assertInternalType('string', myWordWrap($string, 10));
    }

    public function testWordWrapWhenTextIsLongerThanLength() {
        $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut lectus vulputate, facilisis quam non, fringilla turpis. Praesent at ante lacinia, lacinia augue vel, faucibus sem. Curabitur nec elit libero. Integer ut nulla metus. Quisque nunc ante, vehicula eu gravida eu, euismod sit amet mauris.';
        $this->assertEquals('Lorem ipsum dolor sit...', myWordWrap($string, 21));
    }

    public function testWordWrapWhenTextIsLongerThanLengthAndNeedsToBeCut() {
        $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut lectus vulputate, facilisis quam non, fringilla turpis. Praesent at ante lacinia, lacinia augue vel, faucibus sem. Curabitur nec elit libero. Integer ut nulla metus. Quisque nunc ante, vehicula eu gravida eu, euismod sit amet mauris.';
        $this->assertEquals('Lorem ipsum dolor sit...', myWordWrap($string, 24));
    }

    public function testWordWrapWhenTextIsShorterThanLength() {
        $string = 'Lorem ipsum dolor.';
        $this->assertEquals('Lorem ipsum dolor.', myWordWrap($string, 21));
    }

    public function testWordWrapWhenLengthIsShorterThanLengthOfFirstWord() {
        $string = 'Lorem ipsum dolor.';
        $this->assertEquals('', myWordWrap($string, 3));
    }

}
