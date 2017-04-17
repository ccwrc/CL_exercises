<?php

require_once __DIR__ . '/../vendor/autoload.php';

class BowlingGameTest extends PHPUnit_Framework_TestCase {
    protected $bowlingGame;
    // protected $backupGlobals = ['globalVariable'];

    protected function setUp() {
        // https://phpunit.de/manual/current/en/fixtures.html
        $this->bowlingGame = new BowlingGame();
        $_POST['gamerId'] = 4;
        $_GET['isActive'] = true;
    }

    protected function tearDown() {
        // czyszczenie obiektow po testach
        $this->bowlingGame = null;
        unset($_POST['gamerId']);
        unset($_GET['isActive']);
    }

    public function testIfIhadNoLuckAtAll() {
        // $this->markTestSkipped('testIfIhadNoLuckAtAll pominięty');
        // OK, but incomplete, skipped, or risky tests!
        for ($i = 0; $i < 20; $i++) {
            $this->bowlingGame->roll(0);
        } // 0 zbitych kregli = 0 punktow
        $this->assertEquals(0, $this->bowlingGame->score());
    }

    public function testIfIhadAlittleLuck() {
        // $this->markTestIncomplete('test niekompletny');
        // OK, but incomplete, skipped, or risky tests!
        for ($i = 0; $i < 10; $i++) {
            $this->bowlingGame->roll(1);
            $this->bowlingGame->roll(0);
        }
        $this->assertEquals(10, $this->bowlingGame->score());
    }

    public function testIfIhadOneStrike() {
        $this->bowlingGame->roll(10); //strike
        $this->bowlingGame->roll(3);
        for ($i = 0; $i < 17; $i++) {
            $this->bowlingGame->roll(0);
        } // 10 + 3 + 3 bonusu za strike
        $this->assertEquals(16, $this->bowlingGame->score());
    }

    public function testIfIHadOneStrikeAndAlittleLuck() {
        $this->bowlingGame->roll(10); //strike
        $this->bowlingGame->roll(3);
        $this->bowlingGame->roll(4);

        for ($i = 0; $i < 16; $i++) {
            $this->bowlingGame->roll(0);
        } // bonus za strike 3+4
        $this->assertEquals(24, $this->bowlingGame->score());
    }

    public function testIfIHadOneSpare() {
        $this->bowlingGame->roll(3);
        $this->bowlingGame->roll(7); // 3+7 = spare
        $this->bowlingGame->roll(4); // bonus za spare - 4 (1 rzut z nast. ramki)
        $this->bowlingGame->roll(3);

        for ($i = 0; $i < 16; $i++) {
            $this->bowlingGame->roll(0);
        }
        $this->assertEquals(21, $this->bowlingGame->score());
    }

    public function testIfIHadAperfectGame() {
        for ($i = 0; $i < 12; $i++) {
            $this->bowlingGame->roll(10);
        }
        $this->assertEquals(300, $this->bowlingGame->score());
    }

    public function testIfGamerIdIsCorrect() {
        // dane z setUp() czyszczone po zakonczeniu testu
        $this->assertEquals(4, $_POST['gamerId']);
    }

    public function testIfGamerIsActive() {
        // dane z setUp() czyszczone po zakonczeniu testu
        $this->assertTrue($_GET['isActive']);
    }

    public function testIfConfigurationWorks() {
        // dane wpisane w phpunit.xml - test ok
        $this->assertEquals('simple', $GLOBALS['simpleVar']);
        $this->assertEquals(33, $_POST['testVar']);
        $this->assertEquals(77, $_GET['testVarGet']);
        // dane z setUp() 
        $this->assertEquals(4, $_POST['gamerId']);
    }

}
