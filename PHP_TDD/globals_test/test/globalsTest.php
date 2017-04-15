<?php

require_once __DIR__ . '/../globals.php';

class globalsTest extends PHPUnit_Framework_TestCase {

    public function testSimple() {
        $this->assertEquals('simple', $GLOBALS['simpleVar']);
        $this->assertEquals(74, $_POST['testVar']);
    }

}

// brak sciezki w phpunit, wiec
// ./vendor/bin/phpunit test/globalsTest.php

