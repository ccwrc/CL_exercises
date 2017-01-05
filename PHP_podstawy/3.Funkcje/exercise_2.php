<?php

/* Napisz funkcję perfectnumber($n), która zwraca true, gdy zadana parametrem liczba całkowita 
 * jest liczbą doskonałą, false w przeciwnym przypadku. Liczba doskonała to taka, która jest 
 * równa sumie swoich dzielników. Przykładami takich liczb są:
    1 = 1,
    6 = 1+2+3.   */

function perfectNumber($n) {
    if ($n == 1) {
        return true;
    }

    $total = 0;
    for ($i = 1; $i < $n; $i++) {
        if (($n % $i) == 0) {
            $total+= $i;
        }
    }

    if ($total == $n) {
        return true;
    } else {
        return false;
    }
}

// sqrt($n) - pierwiastek kwadratowy

/*
echo "<ol>";
for ($i=1; $i<=990; $i++) {
if (perfectNumber($i)) {echo "<li>$i jest doskon</li>";}}
echo "</ol>";
*/
// $loopCounter - licznik iteracji
// for ($i=1; $i<intval(sqrt($n)); $i++)
