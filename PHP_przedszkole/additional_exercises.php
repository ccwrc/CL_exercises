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

function weGeneratePi($acc) {
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
// var_dump(weGeneratePi(5999899)); // 3.141592320251


/* Ćwiczenie dodatkowe 4
Liczbą doskonałą nazywamy liczbę, która jest sumą wszystkich swoich dzielników. Jest to np. 6, 
 * ponieważ 6 = 3 + 2 + 1.

Liczbą niekompletną nazywamy liczbę, która jest większa od sumy wszystkich swoich dzielników. 
 * Jest to np. 10 (1+2+5=8 < 10).

Napisz program który wypisze wszystkie liczby od 0 do wcześniej zdefiniowanej liczby x 
 * i określi czy jest to liczba doskonała, niekompletna czy żadna z nich. */

function perfectNumber($isPerfect) {
    $total = 0;

    if ($isPerfect == 0 || $isPerfect == 1) {
        echo "$isPerfect nie jest ani niekompletna, ani doskonała <br/>";
    } else {
        for ($i = 1; $i < $isPerfect; $i++) {
            if ($isPerfect % $i == 0) {
                $total = $total + $i;
            }
        }

        if ($total == $isPerfect) {
            echo "$isPerfect jest liczbą doskonałą <br/>";
        } else if ($total < $isPerfect) {
            echo "$isPerfect jest liczbą niekompletną <br/>";
        } else {
            "$isPerfect nie jest ani niekompletna, ani doskonała <br/>";
        }
    }
}

function maxPerfectNumber($maxNumber) {
    for ($i = 0; $i <= $maxNumber; $i++) {
        perfectNumber($i);
    }
}
// maxPerfectNumber(9000);


/* Ćwiczenie dodatkowe 5

Napisz funkcję mySin(x, iterNum) i myCos(x, iterNum), która zwraca aproksymacje funkcji 
 * sinus i cosinus używając następujących wzorów:

sin(x) = (x^1)/1! - (x^3)/3! + (x^5)/5! - (x^7)/7! + (x^9)/9! - (x^11)/11! + ...
cos(x) = (x^0)/0! - (x^2)/2! + (x^4)/4! - (x^6)/6! + (x^8)/8! - (x^10)/10! + ...

Pamiętaj że 0! = 1

Żeby to zrobić najpierw napisz funkcje do wyliczania silni, potem do wyliczania potęgi a 
 * na koniec połącz je w całość. */

function strong($strongNumber) {
    $total = 1;

    if ($strongNumber == 0) {
        return 1;
    } else {
        for ($strongNumber; $strongNumber > 1; $strongNumber--) {
            $total = $total * $strongNumber;
        }

        return $total;
    }
}

function powerAn ($argA, $argN) {
    if ($argA == 0 || $argA == 1) {
        return 1;
    }
    
    $helpNumber = $argA;
    for ($i = 2; $i <= $argN; $i++) {
        $helpNumber *= $argA;
    }
    return $helpNumber;
}

function sinCos($x, $y) {
    return (powerAn($x, $y)) / strong($y);
}

// sin(x) = (x^1)/1! - (x^3)/3! + (x^5)/5! - (x^7)/7! + (x^9)/9! - (x^11)/11!
function mySin($x, $iterNum) {
    $total = sinCos($x, 1);
    $iterator = 1;
    
    for ($i = 3; $i <= ($iterNum * 2); $i++) {
        if ($i % 2 != 0) {
            if ($iterator % 2 != 0) {
                $total -= sinCos($x, $i);
                $iterator++;
            } else {
                $total += sinCos($x, $i);
                $iterator++;
            }
        }
    }
    return $total;
}

// cos(x) = (x^0)/0! - (x^2)/2! + (x^4)/4! - (x^6)/6! + (x^8)/8! - (x^10)/10!
function myCos($x, $iterNum) {
    $total = sinCos($x, 0);
    $iterator = 1;
    
    for ($i = 2; $i <= ($iterNum * 2); $i++) {
        if ($i % 2 == 0) {
            if ($iterator % 2 != 0) {
                $total -= sinCos($x, $i);
                $iterator++;
            } else {
                $total += sinCos($x, $i);
                $iterator++;
            }
        }
    } 
    return $total;
}

