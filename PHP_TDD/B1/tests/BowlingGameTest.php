<?php

require_once __DIR__ . '/../vendor/autoload.php';

class BowlingGameTest extends PHPUnit_Framework_TestCase {

    protected $bowlingGame;
    //protected $backupGlobals = ['globalVariable'];
    
    protected function setUp() {
        $this->bowlingGame = new BowlingGame();
        $_POST['gamerId'] = 4;
        $_GET['isActive'] = true;
    }
    
    protected function tearDown() {
        $this->bowlingGame = null;
    }
    
    public function testIfIhadNoLuckAtAll() {
        //$this->markTestSkipped('testIfIhadNoLuckAtAll skipped');
        for($i = 0; $i < 20; $i++) {
            $this->bowlingGame->roll(0);
        }
        $this->assertEquals(0, $this->bowlingGame->score());
    }
    
    public function testIfIhadAlittleLuck() {
        //$this->markTestIncomplete('test incomplete');
        for($i = 0; $i < 10; $i++) {
            $this->bowlingGame->roll(1);
            $this->bowlingGame->roll(0);
        }
        $this->assertEquals(10, $this->bowlingGame->score());
    }
    
    public function testIfIhadOneStrike() {
        $this->bowlingGame->roll(10); //strike
        
        $this->bowlingGame->roll(3);
        for($i = 0; $i < 17; $i++) {
            $this->bowlingGame->roll(0);
        }
        $this->assertEquals(16, $this->bowlingGame->score());
    }
    
    public function testIfIHadOneStrikeAndAlittleLuck() {
        $this->bowlingGame->roll(10); //strike
        
        $this->bowlingGame->roll(3);
        $this->bowlingGame->roll(4);
        
        for($i = 0; $i < 16; $i++) {
            $this->bowlingGame->roll(0);
        }
        $this->assertEquals(24, $this->bowlingGame->score());
    }
    
    public function testIfIHadOneSpare() {
        $this->bowlingGame->roll(3);
        $this->bowlingGame->roll(7);
        
        $this->bowlingGame->roll(4);
        $this->bowlingGame->roll(3);
        
        for($i = 0; $i < 16; $i++) {
            $this->bowlingGame->roll(0);
        }
        $this->assertEquals(21, $this->bowlingGame->score());
    }
    
    public function testIfIHadAperfectGame() {
        for($i = 0; $i < 12; $i++) {
            $this->bowlingGame->roll(10);
        }
        $this->assertEquals(300, $this->bowlingGame->score());
    }
    
    public function testIfGamerIdIsCorrect() {
        $this->assertEquals(4, $_POST['gamerId']);
    }
    
    public function testIfGamerIsActive() {
        $this->assertTrue($_GET['isActive']);
    }
    
    public function testIfConfigurationWorks() {
        // dane wpisane w konfigu phpunit.xml
        $this->assertEquals('simple', $GLOBALS['simpleVar']);
        $this->assertEquals(33, $_POST['testVar']);
    }
    
}
