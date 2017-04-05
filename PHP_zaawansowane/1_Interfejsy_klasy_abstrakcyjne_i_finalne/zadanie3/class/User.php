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
