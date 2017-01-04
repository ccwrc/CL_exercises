<?php

/* Stwórz 3 zmienne ($a, $b, $c)z wartościami liczbowymi. Zakładamy, że $a <= $b <= $c. 
 * Napisz skrypt, który będzie sprawdzał czy z boków $a, $b i $c można zbudować trójkąt. 
 * Jeżeli nie można – skrypt ma wypisywać odpowiedni komunikat. Jeśli można – skrypt ma 
 * wypisywać jaki to trójkąt:

    Równoramienny
    Równoboczny
    O różnych bokach */

function checkTriangle($sideA, $sideB, $sideC) {
    if (($sideA + $sideB > $sideC) &&
            ($sideC + $sideB > $sideA) &&
            ($sideA + $sideC > $sideB)) {
        if (($sideA == $sideB) && ($sideC == $sideA)) {
            echo "Trójką równoramienny";
        } else if ($sideA == $sideB || $sideB == $sideC || $sideC == $sideA) {
            echo "Trójkąt równoboczny";
        } else {
            echo "Trójkąt różnoboczny";
        }
    } else {
        echo "Podane wymiary nie mogą być bokami trójkąta";
    }
}
