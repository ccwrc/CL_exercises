<?php

/* Napisz funkcję, która wyświetli największą liczbę spośród liczb znajdujących się w tablicy 
 * liczb całkowitych. Funkcja ma przyjmować jeden parametr – tablicę. Spróbuj rozwiązać to 
 * zadanie na 2 różne sposoby. */

$tablica = [11,-22,-33,89]; 
// sposob pierwszy
function biggest($array) {
    if (count($array) == 0)
        return false;
    $big = null; // przy zerze bylby blad dla minusowych, dlatego null
    foreach ($array as $value) {
        if ($value > $big)
            $big = $value;
    }
    echo $big;
}

// sposób drugi
function biggest2($array) {
    if (count($array) == 0)
        return false;
    $big = null;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $big)
            $big = $array[$i];
    }
    echo $big;
}

// sposób trzeci
function biggest3($array) {
    if (count($array) == 0)
        return false;
    rsort($array);
    echo $array[0];
}


