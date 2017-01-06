<?php

/* Napisz dwie funkcje:

    print2DTable($table) - która wyświetli tablicę dwuwymiarową w postaci macierzy,
    getMatrixTrace($array), która obliczy ślad macierzy (sumę elementów na głównej 
 * przekątnej) przekazanej w parametrze. Zakładamy, że tablica reprezentuje macierz 
 * kwadratową (liczba wierszy równa liczbie kolumn)    */

$matrix = array(
    array (1,2,3,4,5),
    array (2,2,6,4,9),
    array (9,8,7,6,1),
    array (1,1,6,2,1),
    array (1,1,4,1,1),
);
        
function print2DTable($table) {
    foreach ($table as $key => $value) {
        foreach ($value as $print) {
            echo $print . " ";
        }
        echo "<br/>";
    }
}


function getMatrixTrace($matrix) {
    $arrayCount = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        $arrayCount+= $matrix[$i][$i];
    }
    echo "Ślad macierzy to $arrayCount";
}


