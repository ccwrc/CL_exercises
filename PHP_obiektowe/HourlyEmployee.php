<?php

/*
  Stwórz klasę HourlyEmployee, która ma reprezentować pracownika któremu pracodawca płaci za godziny.
 *  Klasa ma spełniać następujące wymogi:
  Dziedziczyć po klasie Employee.
  Mieć dodatkową metodę computePayment($hours) która będzie zwracała kwotę do wypłacenia
 * pracownikowi za ilość wyproacowanych godzin.   */

include_once 'Employee.php';

class HourlyEmployee extends Employee {

    public function computePayment($hours) {
        $payableAmount = $this->getSalary() * $hours;
        return $payableAmount;
    }
    // mile widziane: parametry po nazwie klasy bez entera, 
    // wszystkie funkcje po enterze
}
