<?php

/* Napisz klasę mającą jedną statyczną metodę generatePrimeFactors(n), 
 * która wygeneruje wszystkie dzielniki podanej liczby n w kolejności numerycznej
 *  (od najmniejszego). Do tego zadania użyj w pełni metodologii TDD. */

class PrimeNumbers {

    static public function generatePrimeFactors($n) {
        if (!is_int($n)) {
            throw new InvalidArgumentException("$n nie jest liczbą całkowitą");
        }
        if ($n == 0) {
            throw new Exception("0 ma nieskończoną liczbę dzielników");
        }

        $dividers = [1, $n];
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                $dividers[] = $i;
            }
        }
        sort($dividers);
        return $dividers;
    }

}
