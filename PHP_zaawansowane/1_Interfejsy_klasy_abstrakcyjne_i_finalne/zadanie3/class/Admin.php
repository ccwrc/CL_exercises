<?php

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
