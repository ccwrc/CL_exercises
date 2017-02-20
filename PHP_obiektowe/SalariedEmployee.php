<?php

/*
  Stwórz klasę SalariedEmployee, która ma reprezentować pracownika z którym pracodawca ma
 * umowę miesięczną. Klasa ma spełniać następujące wymogi:
  Dziedziczyć po klasie Employee.
  Mieć dodatkową metodę computePayment() która będzie zwracała kwotę do wypłacenia pracownikowi
  za miesiąć (dla uproszczenia możemy założyć że w każdym miesiącu jest 190 godzin pracujących). */

include_once 'Employee.php';

class SalariedEmployee extends Employee {

    private $hoursInMonth;

    public function __construct($id, $firstName, $lastName, $salary) {
        parent::__construct($id, $firstName, $lastName, $salary);
        $this->hoursInMonth = 190;
    }

    public function computePayment() {
        $payment = $this->getSalary() * $this->hoursInMonth;
        return $payment;
    }

}
