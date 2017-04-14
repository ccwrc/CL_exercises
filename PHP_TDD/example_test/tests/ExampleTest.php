<?php

// po dodaniu configu w xml, do odpalenia wystarczylo: ./vendor/bin/phpunit

// nazwa pliku i nazwa klasy powinny byc identyczne
class ExampleTest extends PHPUnit_Framework_TestCase {

    //Każda metoda powinna testować jeden element (funkcjonalność) i być poprzedzona słowem
    // test (np. testInstance lub testAddsNumbers)
    public function testGreetings() {
        $greetings = 'Hello World';
        $this->assertEquals('Hello World', $greetings);
    }
    
    public function testIsValueIsCorrect() { //assertTrue/False
        $value = 10.99;
        $this->assertTrue(is_numeric($value), 'value oblalo test');
    }

}
