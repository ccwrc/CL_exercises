<?php

/* Napisz funkcję o nazwie checkIf2DArrayIsRectangle($array), która sprawdzi, czy wszystkie jej 
 * rzędy mają taką samą długość. Funkcja powinna zwracać wartość booleanowską (true albo false). 
 * Np.

$array1 = array (
    array(  1,  2,  3,  4,  5),
    array( 12, 23, 33, 44, 55),
    array(  4,  7,  3,  3,  6),
    array(  1,  5, 43,  7,  6),
    array(124, 97, 83, 33, 16)
); // Wszystkie rzędy mają tę sam długość (pięć elementów)
checkIf2DArrayIsRectangle($array1); // => true


$array2 = array (
    array( 1,  2,  3,  4,  5,  6), // jeden rząd o innej długości
    array(12, 23, 33, 44, 55),
    array( 4,  7,  3,  3,  6)
);
checkIf2DArrayIsRectangle($array2); // => false
 */

$array1 = array(
    array(1, 2, 3, 4, 5),
    array(12, 23, 33, 44, 55),
    array(4, 7, 3, 3, 6),
    array(1, 5, 43, 7, 6),
    array(124, 97, 83, 33, 16)
);


$array2 = array(
    array(1, 2, 3, 4, 5, 6), // jeden rząd o innej długości
    array(12, 23, 33, 44, 55),
    array(4, 7, 3, 3, 6)
);

function checkIf2DArrayIsRectangle($array) {
    $helpArray = [];
    $loopCount = 0;
    foreach ($array as $k => $v) {
        $loopCount++;
        $check = count($v);
        $helpArray[] = $check;
    }

    if ($loopCount < 2) {
        return true;
    }

    sort($helpArray);
    $digit = count($helpArray) - 1;
    if ($helpArray[0] != $helpArray[$digit]) {
        return false;
    } else {
        return true;
    }
}

// var_dump(checkIf2DArrayIsRectangle2($array2));

// wersja druga
function checkIf2DArrayIsRectangle2($array) {
    $ver = 0;
    $hor = 0;
    foreach ($array as $a) {
        $ver++;
        foreach ($a as $c => $d) {
            $hor++;
        }
    }

    if ($hor / $ver == $ver) {
        return true;
    } else {
        return false;
    }
}
