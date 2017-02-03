<?php

/* Napisz funkcję getNextPower($number, $barrier), która zwróci pierwszy wynik potęgowania liczby 
 * $number wiekszy niż liczba $barrier. Dla uproszczenia możesz uznać, że obie te zmienne to liczby 
 * całkowite. Na przykład dla argumentów 2 i 7 wynikiem jest 8, ponieważ dwa do potęgi trzeciej 
 * jest większe niż siedem.

2^1 = 2 // warunek nie jest spełniony
2^2 = 4 // warunek nie jest spełniony
2^3 = 8 // warunek jest spełniony

findNextPower(2, 7) //=> 8
findNextPower(3, 12385); // => 19683
findNextPower(5, 210345) //=> 390625

Nie używaj funkcji wbudowanej w PHP pow(n, m). */

function getNextPower($number, $barrier) {
    $sum = $number;
    
    while ($sum < $barrier) {
        $sum = $sum * $number;
    }
    return $sum;
}

// echo (getNextPower(3, 12385));