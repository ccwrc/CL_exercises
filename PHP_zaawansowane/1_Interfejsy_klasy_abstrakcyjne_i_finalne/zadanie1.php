<?php

abstract class User {
    protected $username;
    protected $password;
    private $loginAttepmts = 0;

    abstract protected function checkLogin($username, $password);
    abstract public function setLogin($username);
    abstract public function setPassword($password);

    final public function login($username, $password) {
        $loginResult = $this->checkLogin($username, $password);

        if (!$loginResult) {
            $this->loginAttepmts++;
            return false;
        } else {
            if ($this->loginAttepmts < 3 && $loginResult) {
                $this->loginAttepmts = 0;
                return true;
            } else {
                echo "konto zablokowane";
                return false;
            }
        }
    }

}


class Admin extends User {

    public function setLogin($username) {
        if (strlen($username) >= 10) {
            $this->username = $username;
        }
    }

    public function setPassword($password) {
        if (strlen($password) >= 10) {
            $this->password = $password;
        }
    }

    protected function checkLogin($username, $password) {
        if ($this->username === $username && $this->password === $password 
              //  && $_SERVER['REMOTE_ADDR'] === '192.168.33.22') {
                && $_SERVER['REMOTE_ADDR'] === '127.0.0.1') {  
            return true;
        } else {
            return false;
        }
    }

}
// var_dump($_SERVER['REMOTE_ADDR']); //obecny IP do testow


class Client extends User {

    public function setLogin($username) {
        if (strlen($username) >= 8) {
            $this->username = $username;
        }
    }

    public function setPassword($password) {
        if (strlen($password) >= 8) {
            $this->password = $password;
        }
    }

    protected function checkLogin($username, $password) {
        if ($this->username === $username && $this->password === $password) {
            return true;
        } else {
            return false;
        }
    }

    public function getlogin() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

}

// 3x admin
$admin1 = new Admin();
$admin1->setLogin("admin1wew1");
$admin1->setPassword("admin1pass1");

$admin2 = new Admin();
$admin2->setLogin("admin1wew2");
$admin2->setPassword("admin1pass2");

$admin3 = new Admin();
$admin3->setLogin("admin1wew3");
$admin3->setPassword("admin1pass3");

// 3x client
$client1 = new Client();
$client1->setLogin("client1logi1");
$client1->setPassword("clinetpass1");

$client2 = new Client();
$client2->setLogin("client1logi2");
$client2->setPassword("clinetpass2");

$client3 = new Client();
$client3->setLogin("client1logi3");
$client3->setPassword("clinetpass3");