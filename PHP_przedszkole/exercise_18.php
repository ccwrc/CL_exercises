<?php

/* Napisz funkcję, która pobiera 3 liczby jako argumenty i zwraca 
 * największą z nich (zwraca a nie wypisuje na ekranie). */

function biggestNum($n1, $n2, $n3) {
    $helpNumber = $n1;
    
    if ($n2 > $helpNumber) {
        $helpNumber = $n2;
    }
    
    if ($n3 > $helpNumber) {
        $helpNumber = $n3;
    }
    
    return $helpNumber;
}


echo biggestNum(22, 1, 747);