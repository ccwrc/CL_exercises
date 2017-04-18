<?php

// http://itcraftsman.pl/tdd-w-php-jak-testowac-modele/
require_once __DIR__ . '/../vendor/autoload.php';

class UserTest extends PHPUnit_Extensions_Database_TestCase {

    protected static $mysqliConn;

    public function getConnection() {
        $conn = new PDO(
                $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD']
        );
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS['DB_NAME']);
    }

    public function getDataSet() {
        return $this->createFlatXmlDataSet(__DIR__ . '/../datasets/Users.xml');
    }

    public static function setUpBeforeClass() {
        self::$mysqliConn = new mysqli(
                $GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'], $GLOBALS['DB_NAME']
        );
    }

    public function testIfLoginReturnsUserId() {
        $this->assertEquals(3, User::login(self::$mysqliConn, 'haslo3@gmail.elo', 'haslo3'));
    }

    public function testSaveWhenCreatingAnewUser() {
        $user = new User();
        $user->setEmail('user4@email.pl');
        $user->setPassword('user4');
        $this->assertTrue($user->save(self::$mysqliConn));
    }

    public function testGetUserByEmailWithCorrectEmail() {
        $user = User::getUserByEmail(self::$mysqliConn, 'haslo1@gmail.elo');
        $this->assertEquals(1, $user->getId());
    }

    public function testPasswordHashing() {
        $user = new User();
        $user->setEmail('hash@mail.pl');
        $user->setPassword('hash');
        $user->save(self::$mysqliConn);

        $this->assertTrue(password_verify('hash', $user->getPassword()));
    }

}
