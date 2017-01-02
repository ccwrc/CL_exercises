<?php

/* Napisz funkcję, która pobiera liczbę a i n jako argument i zwraca jako wynik a do potęgi n.

Nie używaj funkcji wbudowanej pow() tylko pętli! */

function powerAn ($argA, $argN) {
    if ($argA == 0 || $argA == 1) {
        return 1;
    }
    
    $helpNumber = $argA;
    for ($i = 2; $i <= $argN; $i++) {
        $helpNumber *= $argA;
    }
    return $helpNumber;
}

echo powerAn(3, 3);
