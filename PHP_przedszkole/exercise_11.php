<?php

/* Napisz program który na podstawie wartości zmiennej n będzie rysował następujący schemat 
 * (tutaj dla n = 5). Użyj do tego 2ch pętli for.

* 
* * 
* * * 
* * * * 
* * * * * 

    Rozwiąż to zadanie używając pętli zależnych.
    Rozwiąż to zadanie używając pętli niezależnych i if-a.
 */

$varN = 5;
// 2x for
/* 
for ($i = 0; $i < $varN; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
} */

// if
for ($i = 1; $i <= $varN; $i++) {
    for ($j = 1; $j <= $varN; $j++) {
        if ($i >= $j) {
            echo "*";
        }
    }
    echo "<br/>";
}
