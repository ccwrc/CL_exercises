<?php

/* Ćwiczenie dodatkowe 1

Napisz funkcję sprawdzającą czy podana liczba jest liczbą pierwszą (jest podzielna tylko przez 1 
 * i samą siebie). Funkcja ma zwracać wartość true albo false (boolean).

Zastosuj podejście brute force:
Algorytm brute force jest najprostszą, a zarazem najbardziej czasochłonną metodą na wyznaczanie 
 * liczb pierwszych. Jego działanie opiera się na sprawdzeniu wszystkich potencjalnych 
 * dzielników danej liczby - jeżeli dana liczba nie dzieli się przez żadną inną liczbę całkowitą 
 * (oprócz jedynki i samej siebie) to jest ona oznaczana jako pierwsza.

W celu optymalizacji algorytmu, sprawdza się wszystkie potencjalne dzielniki nie większe niż 
 * pierwiastek z samej sprawdzanej liczby - większe wartości nie mogą być już dzielnikami.

Żeby dostać resztę z dzielenia użyj operatora %, np.:
12 % 5 = 2
 */

function checkPrime($numX) {
    $helpArray = [];
    
    for ($i = 1; $i <= (pow($numX, 1/2)); $i++) {
        if ($numX % $i == 0) {
            $helpArray[] = $i;
        }
    }
    
    if (count($helpArray) >= 3) {
        return false;
    } else {
        return true;
    }
}
// var_dump(checkPrime(103079)); // true :)


/* Ćwiczenie dodatkowe 2

Napisz funkcję, która będzie losowała liczbę z zakresu 0-20 aż nie wylosuje liczby 10.

Za każdym razem kiedy wylosuje złą liczbę ma wypisać na ekran „Zła liczba”, a w chwili 
 * wylosowania poprawnej ma wypisać „Poprawna liczba”. Funkcja ma zwracać ilość przeprowadzonych 
 * losowań.
http://php.net/manual/pl/function.rand.php
Do losowania liczb użyj funkcji rand.  */

function randNumber() {
    $num10 = 10;
    $countRand = 0;
    
    do {
        $numRand = rand(0, 20);
        if ($num10 != $numRand) {
            echo "Zła liczba <br/>";
            $countRand++;
        } else {
            echo "Poprawna liczba <br/>";
            $countRand++;
        }
    } while ($num10 != $numRand);
    
    return $countRand;
}


/* Ćwiczenie dodatkowe 3

Napisz program który będzie zwracał wartość liczby Pi używając następującej formuły:

pi = 4 * ((1/1 - 1/3) + (1/5 - 1/7) + (1/9 - 1/11) + ...)

Zobacz jak zmienia się precyzja wyniku w zależności od ilości iteracji twojej pętli. */

function weCheckPi($acc) {
    $total = 0;
    $check = 0;
    
    for ($i = 1; $i <= $acc; $i++) {
        if (($i % 2 != 0) && ($i > $check)) {
            $total += ((1/$i) - (1/($i + 2)));
            $check = $i + 2;
        }
    }
    
    return 4 * $total;
}
// var_dump(weCheckPi(5999899)); // 3.141592320251

