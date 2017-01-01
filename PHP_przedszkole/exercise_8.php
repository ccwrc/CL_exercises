<?php

/* Napisz program, który będzie liczył sumę wszystkich liczb w podanym przedziale od x do y. 
 * Użyj do tego obu znanych Ci pętli.

Np. dla podanego x = 5, y = 10 suma to 5+6+7+8+9+10=45 */

$numberX = 5;
$numberY = 10;
$total = 0;

/* while loop
while ($numberX <= $numberY) {
    $total = $total + $numberX;
    $numberX++;
}

echo $total; */

// for loop
for ($numberX; $numberX <= $numberY; $numberX++) {
    $total = $total + $numberX;
}

echo $total;

