<?php

/* Znajdują się tu kawałki kodu i możliwe ich wyniki zapisane w komentarzach. 
 * Zaznacz która odpowiedź jest poprawna i dopisz dlaczego tak uważasz. 
 * Postaraj się wybrać którąś odpowiedź zanim uruchomisz plik! */

$a = 7;
$b = 4;
function b($a, $b) {
    global $a, $b;
    $a += 7;
    $a++;
    $b += $a;
    return true;
}
echo $b, $a;

/*
Co zostanie wyświetlone przez funkcje?
a. 1419
b. 74
c. 1915
d. 47
e. 1519


Prawidłowa odpowiedź: 4 7 lub 19 15, opis poniżej
Uzasadnienie: nie została wywołana funkcja a nawet jak zostanie wywołana to zwraca jedynie
 * wartość logiczną. W tych liniach kodu jedyne co się wykonuje to echo.
 * JEŚLI funkcja zostanie wywołana i po niej wywołamy echo to zostaną już podane nowe
 * wartości a i b ponieważ w funkcji są wywoływane globalnie i zmiany na nich wykonywane
 * także wyświetlają się globalnie
 */