<?php

/* Znajdują się tu kawałki kodu i możliwe ich wyniki zapisane w komentarzach. 
 * Zaznacz która odpowiedź jest poprawna i dopisz dlaczego tak uważasz. 
 * Postaraj się wybrać którąś odpowiedź zanim uruchomisz plik! */

function swings(&$park) {
    $park++;
    $park = roundabout($park);
}

function roundabout($park) {
    $park *= 2;
}

$park = 17;
echo swings($park);

/*
Co zostanie wyświetlone przez funkcje?
a. 19
b. 37
c. 36
d. 74
e. nic nie wyświetli


Prawidłowa odpowiedź: nic nie wyświetli
Uzasadnienie: żadna z funkcji niczego nie zwraca
 */