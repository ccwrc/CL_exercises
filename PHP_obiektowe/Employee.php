<?php

/*
  Stwórz klasę Employee, która ma spełniać następujące wymogi:
 * 1. Mieć prywatne atrybuty:
  id - atrubyt ten powinien trzymać numer identyfikacyjny pracownika,
  firstName - atrybut określający imię pracownika,
  lastName - atrybut określający nazwisko pracownika,
  salary - atrybut określający ile pracownik zarabia za godzinę.
  Posiadać konstruktor przyjmujący id, imię, nazwisko i płace za godzinę.
  Posiadać getery i setery do atrybutów firstName, lastName i salary. Do atrybutu id będzie
 * potrzebny tylko geter.
  Posiadać metodę 'raiseSalary($percent)' której rolą będzie zwiększenie wartości atrybutu
 * salary o podany procent. Pamiętaj o sprawdzeniu czy podana wartość jest:
  Wartością numeryczną,
  Wieksza (lub równa) od 0 */

class Employee {

    private $id;
    private $firstName;
    private $lastName;
    private $salary;

    public function __construct($id, $firstName, $lastName, $salary) {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setSalary($salary);
        $this->id = $id;
    }

    public function setFirstName($firstName) {
        if (is_string($firstName) && $firstName != '') {
            $this->firstName = $firstName;
        } else {
            return false;
        }
        return $this;
    }

    public function setLastName($lastName) {
        if (is_string($lastName) && $lastName != '') {
            $this->lastName = $lastName;
        } else {
            return false;
        }
        return $this;
    }

    public function setSalary($salary) {
        if (is_numeric($salary) && $salary > 0) {
            $this->salary = $salary;
        }
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function raiseSalary($percent) {
        if (is_numeric($percent) && $percent > 0) {
            $this->salary += ($this->salary * ($percent / 100));
        }
        return $this;
    }

}
