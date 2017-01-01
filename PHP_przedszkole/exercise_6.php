<?php

/* Napisz program, który wystawi ocenę z testu (użyj if, elseif i else). 
 * Pamiętaj o sprawdzeniu czy ilość punktów nie jest mniejsza niż 0 i większa niż 100.

    0 - 39 pkt - ocena niedostateczna
    40 - 54 pkt - ocena dopuszczająca
    55 - 69 pkt - ocena dostateczna
    70 - 84 pkt - ocena dobra
    85 - 98 pkt - ocena bardzo dobra
    99 - 100 pkt - ocena celująca
 */

$sumOfpoints = 45;

if ($sumOfpoints >= 0 && $sumOfpoints <= 39) {
    echo "ocena niedostateczna";
} else if ($sumOfpoints >= 40 && $sumOfpoints <= 54) {
    echo "ocena dopuszczająca";
} else if ($sumOfpoints >= 55 && $sumOfpoints <= 69) {
    echo "ocena dostateczna";
} else if ($sumOfpoints >= 70 && $sumOfpoints <= 84) {
    echo "ocena dobra";
} else if ($sumOfpoints >= 85 && $sumOfpoints <= 98) {
    echo "ocena bardzo dobra";
} else if ($sumOfpoints >= 99 && $sumOfpoints <= 100) {
    echo "ocena celująca";
} else {
    echo "wprowadziłeś dane spoza zakresu (1-100)";
}