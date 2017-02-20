<?php

/*
  Stwórz klasę AdvancedCalculator, która dziedziczy po klasie Calculator. Klasa powinna implementować
 *  następujące metody:
  pow($num1, $num2) – metoda ma zwracać num1 do potęgi num2. Dodatkowo w tablicy operacji ma
 * zapamiętać napis: "num1^num2 equals result".
  root($num1, $num2) – metoda ma wyliczyć pierwiastek num2 stopnia z num1. Dodatkowo w tablicy
 * operacji ma zapamiętać napis: "root num2 of num1 equals result".
  Pamiętaj o nastawieniu atrybutów klasy Calculator na protected. */

include_once 'Calculator.php';

class AdvancedCalculator extends Calculator {

    static protected $pi = M_PI;

    public function pow($num1, $num2) {
        $result = 1;
        for ($i = 0; $i < $num2; $i++) {
            $result *= $num1;
        }
        $this->addToOperationsHistory("$num1 ^ $num2 equals $result");
        return $result;
    }

    public function root($num1, $num2) {
        $result = pow($num1, 1 / $num2);
        $this->addToOperationsHistory("root $num2 of $num1 equals $result");
        return $result;
    }

    static public function computeCircleRadius($r) {
        $result = self::$pi * sqrt($r);
        return $result;
        // Ta metoda nie będzie dopisywać obliczeń do tablicy 
        // funkcja statyczna moze korzystać ze statycznych argumentów
        // nie moze korzystac ze zmiennych obiektu
        // funkcja statyczna może być wywołana bez istnienia obiektu
    }

}
