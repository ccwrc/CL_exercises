<?php

/* Napisz program, który liczy wartość x!. gdzie ! oznacza silnię a x jest zmienną. 
 * Użyj do tego obu znanych Ci pętli.

Silnia jest zdefiniowana jako iloraz wszystkich liczb całkowitych w zakresie od 1 
 * do podanej liczby. Czyli:

5! = 1*2*3*4*5 = 120
8! = 1*2*3*4*5*6*7*8 = 40320
 */

$lastNumber = 0;
$total = 1;

if ($lastNumber == 0) {
    echo 1;
} else {
    for ($lastNumber; $lastNumber > 1; $lastNumber--) {
        $total = $total * $lastNumber;
    }

    echo $total;
}