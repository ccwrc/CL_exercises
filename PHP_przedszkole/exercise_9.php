<?php

/* Napisz program który na podstawie wartości zmiennej n będzie wypisywał wszystkie liczby 
 * od 0..n. Przy każdej liczbie ma napisać czy jest ona parzysta czy nie, 
 * liczba i informacja o niej mają znaleźć się w jednej linii. Np:

0 – parzysta
1 – nieparzysta
2 – parzysta
3 – nieparzysta
...
 */

$numberN = 27;
$iterator = 0;

while ($iterator <= $numberN) {
    if ($iterator%2 > 0) {
        echo "$iterator - nieparzysta <br/>";
    } else {
        echo "$iterator - parzysta <br/>";
    }
    $iterator++;
}

