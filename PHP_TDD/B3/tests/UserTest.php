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
        $user = User::GetUser(2);
        $this->assertEquals(2, $user->getId());
    }      
    
    public function testToCreateNewUser() {
        $user = new User(6, "newName", "mail@ww.ll", "info", "pass");
        $this->assertInstanceOf('User', $user);
    }
    
    public function testCreateUserIsUserExists() {
        $this->assertNull(User::CreateUser("haslo1@gmail.elo", "haslo1"));
    }
    
    public function testCreateUserIsUserNoExists() {
        $newUser = User::CreateUser("hasl1111@gmail.elo", "has11lo1");
        $this->assertInstanceOf('User', $newUser);
    }
    
    public function testCreateUserIsEmailCorrect() {
        $newUser = User::CreateUser("testowy@gmail.elo", "haslo77");
        $this->assertEquals("testowy@gmail.elo", $newUser->getEmail());
    }
    
    public function testAuthenticateUserIfUserNoExists() {
        $this->assertNull(User::AuthenticateUser("false@mail.pp", "falsepass"));
    }
    
    public function testAuthenticateUserIfUserExists() {
        $user = User::AuthenticateUser("haslo1@gmail.elo", "haslo1");
        $this->assertInstanceOf('User', $user);
    }
    
    
    
    
}

