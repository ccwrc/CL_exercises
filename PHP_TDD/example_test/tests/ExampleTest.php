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
    
    public function testIsExpectedIsEqual() { // gdy typy musza sie zgadzac: assertSame
        $expected = '10';
        $this->assertEquals($expected, 5 + 5, 'oblany test expected=10');
    }

    public function testIsFruitInArray() {
        $fruits = ['Apple', 'Orange', 'Grapefruit'];
        $this->assertContains('Apple', $fruits, "brak owoca w tablicy");
    }// jesli szukamy klucza: assertArrayHasKey
    
    // czy podany parametr (jako drugi) jest konkretnego typu. Typ musi być wyrażony jako string
    public function testIsSecondParameterIsArray() {
        $fruits = ['Apple', 'Orange', 'Grapefruit'];
        $this->assertInternalType('array', $fruits);
    } // http://php.net/manual/en/language.types.php

    public function testIsSecondParameterIsBool() {
        $bool = false;
        $this->assertInternalType('bool', $bool);
    }

    public function testIsSecondParameterIsInt() {
        $param = 11;
        $this->assertInternalType('int', $param); // integer tez dziala
    }

    public function testIsSecondParameterIsString() {
        $param = "11";
        $this->assertInternalType('string', $param, "tu powinien byc string");
    }
    
    public function testIsDateIsObject() {
        $date = new DateTime();
        // $date = "new DateTime()";
        $this->assertInstanceOf('DateTime', $date);
    }

    // czy dany test rzuca wyjatek    
    /**
     * @expectedException Exception
     */
    public function testMustThrowException() {
        throw new Exception("Error", 1);
    } // i jak rzuca to zalicza
    // inne do adnotacji
    // @expectedExceptionCode, @expectedExceptionMessage oraz @expectedExceptionMessageRegE
    

}
