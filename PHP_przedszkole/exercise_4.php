<?php

/* Napisz skrypt który definiuje 3 liczby jako zmienne: a, b i c. Nastepnie sprawdzi czy podane 
 * liczby mogą być bokami trójkąta. Trójkąt można zbudować z 3 linii tylko wtedy kiedy:

a + b > c
c + b > a
a + c > b

Żeby wypisać coś na stronie użyj funkcji echo("Tekst który pokaże się na stronie"); */

$sideA = 2;
$sideB = 2.1;
$sideC = 4;

if (($sideA + $sideB > $sideC) && 
    ($sideC + $sideB > $sideA) && 
    ($sideA + $sideC > $sideB)) {
    echo "Podane zmienne mogą być bokami trójąta";
    } else {
        echo "To zdecydowanie NIE może być trójkąt";
    }