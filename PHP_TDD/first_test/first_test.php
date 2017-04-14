<?php

// co jest grane: ./vendor/bin/phpunit
// komenda do wyw testu: phpunit UnitTest first_test.php
// ew. ./vendor/bin/phpunit first_test.php - pref.
// 
// https://phpunit.de/
// http://itcraftsman.pl/tdd-w-php-testy-jednostkowe-z-phpunit-krok-po-kroku/
// PHPUnit 6.1 is supported on PHP 7.0 and PHP 7.1.

class sampleTest extends PHPUnit_Framework_TestCase {

    public function testTrue() {

        // $this->assertTrue(true); // OK (2 tests, 2 assertions)
        // $this->assertTrue(functionFail(13));
        $this->assertTrue(true, "ten komunikat powinien sie wyswietlic po oblaniu testu"); 
    }

    public function testFalse() {
        $this->assertFalse(true);
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