<?php

/* Zaimplementuj algorytm sortujący tablicę o nazwie Bubblesort. Jest to jeden z łatwiejszych 
  http://www.tutorialspoint.com/data_structures_algorithms/bubble_sort_algorithm.htm
 * algorytmów. Jeżeli chcesz dowiedzieć się wiecej o algorytmach sortujących 
 * (jest to dobre ćwiczenie algorytmiki) zajrzyj tutaj 
http://www.algorytm.org/algorytmy-sortowania/            */

$arrayToSort = array(-100,199,56, 563, 9, 9, 1, 1, 854, 14, -5, 11, 792, 13, 1900, 4, 0, -88);
$counter = 0;  // zliczanie zmian, czyli ile bylo przebiegow przy sortowaniu

function ccwrcBubbleSort($array, &$counter) {
    $changes = true;
    
    while ($changes) {
        $changes = false;
        for ($i = 0; $i < (count($array) - 1); $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $greater = $array[$i];
                $smaller = $array[$i + 1];
                $array[$i] = $smaller;
                $array[$i + 1] = $greater;
                $changes = true; 
                $counter++; 
            }
        }
        
        if (!$changes) {
            return $array;
        }
    }
}

var_dump(ccwrcBubbleSort($arrayToSort, $counter));
print $counter;

/* pseudo kod babelkow
 * sprawdzenie ilu elementowa jest tablica
 * element o id n porownujemy go z elementem o indeksie n-1
 * jeśli element n < n-1 to zamieniamy je miejscami
 * jesli nastapila zamiana miejscami to znacznik ustawiamy na true
 * po wykonaniu operacji na elemencie 0 spradzamy, czy znacznik jest ta true
 * - jesli jest na true zaczynamy zabawe od poczatku
 * - jesli jest na false konczymy  */
