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

$sumOfPoints = 45;

if ($sumOfPoints >= 0 && $sumOfPoints <= 39) {
    echo "ocena niedostateczna";
} else if ($sumOfPoints >= 40 && $sumOfPoints <= 54) {
    echo "ocena dopuszczająca";
} else if ($sumOfPoints >= 55 && $sumOfPoints <= 69) {
    echo "ocena dostateczna";
} else if ($sumOfPoints >= 70 && $sumOfPoints <= 84) {
    echo "ocena dobra";
} else if ($sumOfPoints >= 85 && $sumOfPoints <= 98) {
    echo "ocena bardzo dobra";
} else if ($sumOfPoints >= 99 && $sumOfPoints <= 100) {
    echo "ocena celująca";
} else {
    echo "wprowadziłeś dane spoza zakresu (1-100)";
}