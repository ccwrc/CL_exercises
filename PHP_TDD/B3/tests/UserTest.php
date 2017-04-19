<?php

require_once __DIR__ . '/../src/User.php';
require_once __DIR__.'/../src/connection.php';

class UserTest extends PHPUnit_Extensions_Database_TestCase {
    
    public function getConnection() {
        $conn = new PDO($GLOBALS["DB_DSN"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWD"]);
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS["DB_NAME"]);
    }
    
    public function getDataSet() {
        return $this->createFlatXmlDataSet(__DIR__.'/../datasets/Users.xml');
    }
    
    public function testGetUserIfIdIsNotInDB() {
        $this->assertNull(User::GetUser(60));
    }    
    
    public function testGetUserIfIdIsInDB() {
        $user = User::GetUser(1);
        $this->assertEquals(1, $user->getId());
    }      
    
    public function testToCreateNewUser() {
        $user = new User(6, "newName", "mail@ww.ll", "info", "pass");
        $this->assertInstanceOf('User', $user);
    }
    
    
    
    
    
    
}

