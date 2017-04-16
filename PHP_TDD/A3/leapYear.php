<?php

/* Napisz funkcję, która przyjmuje liczbę całkowitą (oznaczającą rok) i zwraca true – jeżeli rok
 *  jest przestępny, false jeżeli nie. Napisz testy do tej funkcji. */

function leapYear($year) {

    if ($year <= 0 || !is_int($year)) {
        throw new RangeException('nieprawidłowa wartość');
    }

    if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0))) {
        return true;
    } else {
        return false;
    }
}

//// wersja bardziej poprawna, ale z wieksza iloscia kodu
//function leapYear($year) {
//    if(!is_int($year)) {
//        throw new InvalidArgumentException("$year is not an integer");
//    }
//    if($year <= 0) {
//        throw new RangeException("$year cannot be less than 0");
//    }
//    
//    if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
//        return true;
//    } else {
//        return false;
//    }
//}