<?php

/* Zadanie 2
  Stwórz klasę UserSet reprezentującą zbiór użytkowników klasy Client. Dla nowo stworzonej
 * klasy zaimplementuj metodę add przyjmującą jako argument obiekt klasy Client. 
 * Zaimplementuj dla tej klasy interfejs Iterator, który spowoduje wyświetlenie 
 * loginów i haseł kolejnych użytkowników. Zaimplementuj metodę checkLogin przyjmującą 
 * jako argument hasło i zwracającą wszystkich użytkowników mogących się zalogować danym hasłem
 *  – wykorzystaj pętlę foreach. */

include_once 'zadanie1.php';

// interfejs iterator http://php.net/manual/en/class.iterator.php

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

}

$user1 = new Client();
$user1->setLogin('supernbowylogin');
$user1->setPassword('superhaslo111');

$user2 = new Client();
$user2->setLogin('22supernbowylogin');
$user2->setPassword('Superhaslo111');

$user3 = new Client();
$user3->setLogin('33supernbowylogin');
$user3->setPassword('superhaslo111');

$usersett = new UserSet;
$usersett->addClient($user1)->addClient($user2)->addClient($user3)->addClient($client1);

var_dump($usersett);

foreach ($usersett as $k => $v) {
    echo "klucz " . $k . " login ";
    echo $v->getLogin() . "<br>";
    echo $v->getPassword() . "<br><br>";
}

echo "<hr>";
var_dump($usersett->checkLogin("superhaslo111"));
