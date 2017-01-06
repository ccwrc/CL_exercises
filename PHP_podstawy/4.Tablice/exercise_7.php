<?php

/* Przerób funkcję z ćwiczenia 5
 *  w taki sposób żeby przyjmowała jeszcze 3 argument. Argument ma być przekazywany 
 * przez referencję. Jeżeli funkcja znajdzie szukany element w tablicy powinna zapisać 
 * indeks pod którym wystąpił szukany element w argumencie przekazanym przez referencje.

Zobacz co się zmieni jeżeli przekażesz ten argument nie używając referencji. 
 * Postaraj się wyjaśnić dlaczego tak się dzieje. */

$array = [1, 2, 3, 4, 5, 9];
$index = null; //na ktorej pozycji znaleziona zmienna

function checkParam($param, $array, &$index) {
    foreach ($array as $k => $v) {
        if ($v == $param) {
            $index = $k;
            return true;
        }
    }
    return false;
}

/* parametr (tu index) przekazywany przez referencję zmienia wartość
jeśli nie jest przekazywany przez referencję to funkcja dostaje tylko
kopię(zawartość), nie może zmienić wartości zmiennej poza funkcją */