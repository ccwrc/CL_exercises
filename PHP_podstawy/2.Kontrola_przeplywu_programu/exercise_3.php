<?php

/* Napisz skrypt, który dla zmiennej $liczba będącej liczbą całkowitą dodatnią wypisze sumę 
 * wszystkich nieparzystych liczb aż do liczby $liczba. */

function totalNum($number) {
    $total = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 2 > 0) {
            $total = $total + $i;
        }
    }
    return $total;
}


