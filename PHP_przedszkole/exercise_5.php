<?php

/* Napisz program, który definiuje jako zmienne 3 liczby całkowite. Za pomocą używania instrukcji 
 * if, else wypisz na stronie największą z tych liczb. Do porównywania liczb użyj 
 * operatorów: > (większy), >= (większy równy), < (mniejszy), <= (mniejszy równy).  */

$varA = -99;
$varB = 1;
$varC = 68;

$helpVar = $varA;

if ($varB > $helpVar) {
    $helpVar = $varB;
}

if ($varC > $helpVar) {
    $helpVar = $varC;
}

echo "Największa licza to $helpVar";

