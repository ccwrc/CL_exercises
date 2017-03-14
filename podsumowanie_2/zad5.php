<?php

/* Napisz kod PHP klasy VIPUser. Klasa ma spełniać następujące właściwości:

  1.  Dziedziczyć po klasie User (znajduje się w pliku User.php).
  2. Mieć dodatkowy publiczny atrybut: vipCardNumber.
  3. Mieć konstruktor, który przyjmuje następujące dane: imię, nazwisko, mail, numer karty VIP.
 * Imię, nazwisko i mail mają być przekazywane do konstruktora z klasy nadrzędnej. Konstruktor ma 
 * sprawdzać, czy podany numer jest prawidłowy (założenia są opisane w punkcie 4). Jeżeli jest
 *  – to go nastawiać, jeżeli nie – to numer ma być nastawiony na null.
  4.Mieć prywatną metodę checkCard($newNumber) – numer jest prawidłowy, jeżeli jest większy niż 999
 *  i podzielny przez 2. Funkcja ma zwracać wartość logiczną.
  5.Mieć publiczne funkcję setVipCardNumber($newCardNumber) i getVipCardNumber(). Funkcja set ma
 * nastawiać zmienną vipCardNumber (jeżeli podany nowy numer spełnia założenia z punktu 4, 
 * jeżeli nie to ma zostać poprzednia wartość), a funkcja get – ją zwracać.

  Nie zmieniaj nic w pliku User.php */

require_once 'User.php';

class VIPUser extends User {
    public $vipCardNumber;

    public function __construct($mail, $surname, $name, $vipCardNumber) {
        parent::__construct($mail, $surname, $name);

        if (self::checkCard($vipCardNumber)) {
            $this->vipCardNumber = $vipCardNumber;
        }
    }

    private function checkCard($newNumber) {
        if ((is_numeric($newNumber)) && ($newNumber > 999) && ($newNumber % 2 == 0)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getVipCardNumber() {
        return $this->vipCardNumber;
    }

    public function setVipCardNumber($newCardNumber) {
        if (self::checkCard($newCardNumber)) {
            $this->vipCardNumber = $newCardNumber;
        }
    }

}
