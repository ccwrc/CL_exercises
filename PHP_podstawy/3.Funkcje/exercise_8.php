<?php

/* Znajdują się tu kawałki kodu i możliwe ich wyniki zapisane w komentarzach. 
 * Zaznacz która odpowiedź jest poprawna i dopisz dlaczego tak uważasz. 
 * Postaraj się wybrać którąś odpowiedź zanim uruchomisz plik! */

$a = "0";
echo strlen($a); // odp 1
echo empty($a) ? $a : 5; // odp 0
echo $a ?: 5; // odp 5

/*
Co zostanie wyświetlone przez funkcje?
a. 105
b. 100
c. 050
d. 005
e. 150


Prawidłowa odpowiedź: 1 0 5
Uzasadnienie: pierwsze echo sprawdza długość stringa, w którym jest zapisany jeden znak
 * drugie echo korzysta z empty, więc:
 * http://php.net/manual/en/function.empty.php
 * "0" zostanie potraktowane jako pustka i jako prawda zostanie zwrócona zmienna $a 
 * trzecie echo: zapytanie operatorem trójargumentowym zwróci fałsz ze względu na zero w zmiennej.
 * Jako, że w warunku brakuje prawdy (jest pusta, jako fałsz jest 5), jeśli zostanie uznane 
 * za prawdę to zostanie wyświetlona sama wartość zmiennej   */