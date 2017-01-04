<?php

/* Stwórz 3 zmienne ($a, $b, $c)z wartościami liczbowymi. Napisz skrypt, który dla 3 zmiennych 
 * sprawdzi czy są to liczby trójki pitagorejskiej. Dla przypomnienia: 
 * Trójka pitagorejska to 3 liczby które spełniają poniższe założenie:

a^2 + b^2 = c^2

Pamiętaj żeby sprawdzić wszystkie 3 możliwości ułożenia liczb! Użyj operatorów logicznych! */

function checkPit ($a, $b, $c) {
    if ((($a * $a) + ($b * $b) == ($c * $c)) ||
            (($b * $b) + ($c * $c) == ($a * $a)) ||
            (($c * $c) + ($a * $a) == ($b * $b))) {
        echo "To jest trójka pitagorejska";
    } else {
        echo "To nie jest trójka pitagorejska";
    }
}





