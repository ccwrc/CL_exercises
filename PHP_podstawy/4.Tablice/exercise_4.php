<?php

/* Napisz funkcję, która wyświetli te liczby w tablicy, które są mniejsze od średniej 
 * arytmetycznej wszystkich liczb w tablicy.
input -> [1,2,3,4,5]
output =>[1,2]      */

function averageArray($array) {
    $newArray = [];
    $average = null;
    foreach ($array as $value) {
        $average = $average + $value;
    }

    $average = ($average / (count($array)));
    foreach ($array as $val2) {
        if ($average > $val2)
            array_push($newArray, $val2);
    }
    return $newArray;
}



