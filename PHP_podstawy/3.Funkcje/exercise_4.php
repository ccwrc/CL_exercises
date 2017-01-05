<?php

/* Napisz funkcję max2, która zwraca większą z dwóch podanych jako jej parametry liczb, 
 * a następnie funkcję max3, zwracającą największą spośród trzech podanych liczb. 
 * Funkcja max3 ma do tego celu używać funkcji max2. */

function max2($a, $b) {
    if ($a >= $b) {
        return $a;
    } else {
        return $b;
    }
}

function max3($a, $b, $c) {
    if ($a >= (max2($b, $c))) {
        return $a;
    } else {
        return max2($b, $c);
    }
}

