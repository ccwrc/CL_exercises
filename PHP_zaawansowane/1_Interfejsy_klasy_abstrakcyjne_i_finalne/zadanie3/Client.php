<?php

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

    public function getlogin() { //brak camelCase...
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

}
