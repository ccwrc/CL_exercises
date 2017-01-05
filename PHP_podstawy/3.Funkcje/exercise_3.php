<?php

/* Napisz skrypt, który podaną przez użytkownika kwotę pieniędzy (liczba całkowita) rozmieni 
 * na jak najmniejszą ilość monet i banknotów o nominałach 1, 2, 5, 10 złotych. Przykład:

    188 zł Zostanie rozmienione na:
        18 banknotów 10 zł
        1 moneta 5zł
        1 moneta 2zł
        1 moneta 1zł

W skrypcie należy zdefiniować funkcję, w której zadana kwota oraz ilości poszczególnych monet są 
parametrami funkcji (użyj referencji). Funkcja ta powinna wypisywać wynik obliczeń na stronie. */

$n10 = 0;
$n5 = 0;
$n2 = 0;
$n1 = 0;
$amount = 188;

function denomination(&$n10, &$n5, &$n2, &$n1, &$amount) {
    $amount2 = $amount; // kwota poza funkcją powinna zostać niezmieniona
    
    while ($amount2 >= 10) {
        $amount2 = $amount2 - 10;
        $n10++;
    }

    while ($amount2 >= 5) {
        $amount2 = $amount2 - 5;
        $n5++;
    }

    while ($amount2 >= 2) {
        $amount2 = $amount2 - 2;
        $n2++;
    }

    while ($amount2 >= 1) {
        $amount2 = $amount2 - 1;
        $n1++;
    }
    
    echo "$amount zł rozmienione na: <br/>";
    echo "10 zł: $n10 <br/> 5 zł: $n5 <br/> 2 zł: $n2 <br/> 1 zł: $n1 <br/>";
}


