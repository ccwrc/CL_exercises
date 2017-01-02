<?php

/* Napisz funkcje o nazwie FooBar, przyjmującą jedną zmienną. Funkcja ta ma zwracać napis 
 * skonstruowany według nastepujących zasad: Napis ma się składać z kolejnych liczb całkowitych 
 * (zaczynając od 1-ki), ale:

    W miejsce liczb podzielnych przez 3 wypisywać Foo
    W miejsce liczb podzielnych przez 5 wypisywać Bar
    W miejsce liczb podzielnych przez 3 i 5 wypisywać FOOBAR

Np. Dla parametru x = 15 wynik ma być: 12Foo4BarFoo78FooBar11Foo1314FOOBAR */

// wyswietla
function FooBar($parX) {
    for ($i = 1; $i <= $parX; $i++) {
        if (($i%3 == 0) && ($i%5 == 0)) {
            echo "FOOBAR";
        } else if ($i%3 == 0) {
            echo "Foo";
        } else if ($i%5 == 0) {
            echo "Bar";
        } else {
            echo $i;
        }
    }
}

FooBar(15);

// zwraca bez wyswietlania
function FooBar2($parX) {
    $res = "";
    
    for ($i = 1; $i <= $parX; $i++) {
        if (($i%3 == 0) && ($i%5 == 0)) {
            $res .= "FOOBAR";
        } else if ($i%3 == 0) {
            $res .= "Foo";
        } else if ($i%5 == 0) {
            $res .= "Bar";
        } else {
            $res .= "$i";
        }
    }
    return $res;
}

var_dump(FooBar2(15));