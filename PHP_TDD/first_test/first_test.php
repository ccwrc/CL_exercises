<?php

// co jest grane: ./vendor/bin/phpunit
// komenda do wyw testu: phpunit UnitTest first_test.php

class sampleTest extends PHPUnit_Framework_TestCase {

    public function testTrue() {

        // $this->assertTrue(true); // OK (2 tests, 2 assertions)
        // $this->assertTrue(funkcja(423));
        $this->assertTrue(false); 
    }

    public function testFalse() {
        $this->assertFalse(false);
    }

}

// niezal + zal
/* PHPUnit 5.5.7 by Sebastian Bergmann and contributors.

F.                                                                  2 / 2 (100%)

Time: 59 ms, Memory: 4.00MB

There was 1 failure:

1) sampleTest::testTrue
Failed asserting that false is true.

/home/blabla/first_test/first_test.php:11
/usr/share/php/PHPUnit/TextUI/TestRunner.php:429
/usr/share/php/PHPUnit/TextUI/Command.php:155
/usr/share/php/PHPUnit/TextUI/Command.php:106

FAILURES!
Tests: 2, Assertions: 2, Failures: 1.
 */

// niezal + niezal
/* PHPUnit 5.5.7 by Sebastian Bergmann and contributors.

FF                                                                  2 / 2 (100%)

Time: 60 ms, Memory: 4.00MB

There were 2 failures:

1) sampleTest::testTrue
Failed asserting that false is true.

/home/blabla/first_test/first_test.php:11
/usr/share/php/PHPUnit/TextUI/TestRunner.php:429
/usr/share/php/PHPUnit/TextUI/Command.php:155
/usr/share/php/PHPUnit/TextUI/Command.php:106

2) sampleTest::testFalse
Failed asserting that true is false.

/home/blabla/first_test/first_test.php:15
/usr/share/php/PHPUnit/TextUI/TestRunner.php:429
/usr/share/php/PHPUnit/TextUI/Command.php:155
/usr/share/php/PHPUnit/TextUI/Command.php:106

FAILURES!
Tests: 2, Assertions: 2, Failures: 2.
 */