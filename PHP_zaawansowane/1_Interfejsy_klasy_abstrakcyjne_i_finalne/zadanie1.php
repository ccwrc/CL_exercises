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