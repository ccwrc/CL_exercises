<?php

require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../src/connection.php';

class UserTest extends PHPUnit_Extensions_Database_TestCase {

    public function getConnection() {
        $conn = new PDO($GLOBALS["DB_DSN"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWD"]);
        $conn->query("set foreign_key_checks=0");
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS["DB_NAME"]);
    }

    public function getDataSet() {
        return $this->createFlatXmlDataSet(__DIR__ . '/../datasets/Users.xml');
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

    public function testIfDeleteUserReturnTrue() {
        $user = User::GetUser(3);
        $this->assertTrue(User::DeleteUser($user, "haslo3"));
    }

    public function testGetAllUserNamesReturnsCorrectArray() {
        $this->assertArrayHasKey(1, User::GetAllUserNames());
    }

    public function testGetUserInfoIsArray() {
        $this->assertInternalType("array", User::GetUserInfo(1));
    }

    public function testAuthenticate() {
        $user = User::getUser(1);
        $this->assertTrue($user->authenticate("haslo1"));
    }

    public function testSaveToDBandSetPassword() {
        $user = User::getUser(1);
        $user->setPassword("newPass");
        $this->assertTrue($user->saveToDB());
    }

}
