<?php

class User {

    private $id;
    private $email;
    private $password;

    public function __construct() {
        $this->id = -1;
        $this->email = "";
        $this->password = "";
    }

    public function setId($id) {
        if (is_numeric($id)) {
            $this->id = $id;
        }
    }

    public function setEmail($email) {
        if (is_string($email)) {
            $this->email = $email;
        }
    }

    public function setPassword($password, $isHashed = false) {
        if (is_string($password)) {
            if (!$isHashed) {
                $this->password = password_hash($password, PASSWORD_DEFAULT);
            } else {
                $this->password = $password;
            }
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function save(mysqli $connection) {
        $query = "";
        if ($this->id == -1) {
            $query = "INSERT INTO Users (email, password) "
                    . "VALUES ('$this->email', '$this->password')";
        } else {
            $query = "UPDATE Users "
                    . "SET email = '$this->email', password = '$this->password' "
                    . "WHERE id = $this->id";
        }
        return $connection->query($query);
    }

    public static function login(mysqli $connection, $email, $password) {
        $email = $connection->real_escape_string($email);
        $query = "SELECT * FROM Users WHERE email='$email'";
        $res = $connection->query($query);
        $userRow = $res->fetch_assoc();
        if (password_verify($password, $userRow['password'])) {
            return $userRow['id'];
        } else {
            return false;
        }
    }

    public static function getUserByEmail(mysqli $connection, $email) {
        $email = $connection->real_escape_string($email);
        $query = "SELECT * FROM Users WHERE email='$email'";
        $res = $connection->query($query);
        if ($res->num_rows == 1) {
            $userRow = $res->fetch_assoc();
            $user = new User();
            $user->setId($userRow['id']);
            $user->setEmail($userRow['email']);
            $user->setPassword($userRow['password'], true);
            return $user;
        }
    }

}
