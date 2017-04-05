<?php

function __autoload($className) {
    include $className . ".php";
}

class UserSet implements Iterator {

    private $clients;
    private $position; //zmienna do implementacji iteratora

    public function __construct() {
        $this->clients = [];
        $this->position = 0; //ustawienie pozycji dla iteratora
    }

    public function addClient(Client $client) {
        $this->clients[] = $client;
        return $this; //i mozna uzywac lancucha...
    }

    public function getClients() {
        return $this->clients;
    }

    // ponizej implementacja iteratora
    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->clients[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        return isset($this->clients[$this->position]);
    }

//koniec implementacji iteratora

    public function checkLogin($password) {
        $users = [];
        foreach ($this->clients as $client) {
            if ($client->getPassword() === $password) {
                $users[] = $client;
            }
        }
        return $users;
    }
    
    public function setPasswordFromArray($array) {
        foreach ($this->clients as $client) {
            if ($client->getlogin() === $array['username']) {
                $client->setPassword($array['password']);
            }
        }
    }

}
/* Dodaj do klasy UserSet funkcję przyjmującą jako argument następującą tablicę dwuwymiarową:
array('username' => '', 'password' => '')
Funkcja ma ustawiać hasła przekazane w argumencie. */