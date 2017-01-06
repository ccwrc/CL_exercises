<?php

/* Napisz funkcję, która sprawdza, czy zmienna przekazana jako pierwszy parametr występuje w 
 * tablicy przekazanej jako drugi parametr. Jeżeli tak, funkcja powinna zwrócić logiczną prawdę 
 * (true) a jeżeli nie to fałsz (false). */


function checkIfParamInArray($param, $array) {
    foreach ($array as $value) {
        if ($value == $param)
            return true;
    }
    return false;
}


