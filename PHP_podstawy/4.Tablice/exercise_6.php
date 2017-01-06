<?php

/* Napisz funkcję createMultiTable($n). Funkcja ta przyjmuje liczbę całkowitą. Funkcja ta ma 
 * zwrócić dwuwymiarową tablicę, która w obu wymiarach ma podaną wielkość (tablicę możesz 
 * wypełnić kolejnymi liczbami całkowitymi). */

function createMultiTable($n) {
    $newTab = []; // wlasciwie dla czytelnosci mozna nazwac returnTab...
    for ($i = 0; $i < $n; $i++) {
        $helpTab = [];
        for ($j = 0; $j < $n; $j++) {
            $helpTab[] = ($i * $n) + ($j + 1); // zamiast sj+1 mozna start od sj=1 i <=n
        }
        $newTab[] = $helpTab;
    }
    return $newTab;
}






