<?php

/* Znajdują się tu kawałki kodu i możliwe ich wyniki zapisane w komentarzach. 
 * Zaznacz która odpowiedź jest poprawna i dopisz dlaczego tak uważasz. 
 * Postaraj się wybrać którąś odpowiedź zanim uruchomisz plik! */

$x = 1; // moja odp. to jest zmienna globalna, która nie ma nic wspólnego z funkcją

function print_conditional() {
    static $x;  // moja odp. tu służy jako licznik wywołania funkcji(zmienna lokalna)
    if($x++ == 1)
        echo "many";
    echo "good";
    echo "things";
    return $x;
}

print_conditional();
$x++;  // moja odp. to jest zmienna globalna, która nie ma nic wspólnego z funkcją
print_conditional();

/*
Co zostanie wyświetlone przez funkcje?
a. manygoodthingsmanygoodthings
b. manygoodthings
c. goodthingsgoodthings
d. goodthingsmanygoodthings
e. nic nie wyświetli


Prawidłowa odpowiedź: goodthingsmanygoodthings
Uzasadnienie: static $x robi jako licznik funkcji, nie resetuje się po wyjściu z niej
 * zmienna globalna $x nie ma nic wspólnego ze zmienną lokalną $x umieszczoną 
 * w funkcji
 * na początku static $x ma wartość NULL, po pierwszym wywołaniu funkcji ma już wartość 1
 * słowo many pojawi się tylko przy drugim wywołaniu funkcji i nigdy więcej
 * ze względu na warunek if($x++ == 1) { echo("many"); }
 */