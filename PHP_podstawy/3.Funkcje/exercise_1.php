<?php

/* Napisz funkcję rentCost($days), która będzie przyjmować liczbę dni jako argument, 
 * a następnie wyliczać koszt wynajmu pokoju według podanego wzoru:

    Wynajem trwa 1 dzień - koszt pokoju 200zł/dzień
    Wynajem trwa 2-3 dni - koszt pokoju 180zł/dzień
    Wynajem trwa 4-7 dni - koszt pokoju 160zł/dzień
    Wynajem trwa 8+ dni - koszt pokoju 150zł/dzień.

Dodatkowo za każdy pełny tydzień przysługuje 50zł zniżki. Przykład:
input -> 8
output -> 1150
 */

function rentCost($days) {
    $oneDay = 200;
    $twoThree = 180;
    $fourSeven = 160;
    $eightAndMore = 150;
    $discVal = intval(($days / 7)) * 50;

    // intval zaokragla w dol do calkowitej

    switch ($days) {
        case 1: return $oneDay;
        case 2:
        case 3: return $twoThree * $days;
        case 4:
        case 5:
        case 6:
        case 7: return $fourSeven * $days;
        default: return ($eightAndMore * $days) - $discVal;
    }
}


