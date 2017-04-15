<?php

/* Napisz funkcję, która przyjmuje liczbę całkowitą. Funkcja wypisuje w kolejności liczby od 1 do 
 * podanej liczby, ale:

  w miejsce liczb podzielnych przez 3 wypisuje Fizz,
  w miejsce liczb podzielnych przez 5 wypisuje Buzz,
  w miejsce liczb podzielnych przez 3 i 5 wypisuje BuzzFizz.

  Na przykład dla argumentu x = 15 wynik ma być następujący:

  12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz

  Napisz testy do tej funkcji. */

function fizzBuzz($number) {
    if (!is_numeric($number) || !is_int($number) || $number < 0) {
        return false;
    }

    $ret = "";
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 5 == 0 && $i % 3 == 0) {
            $ret .= "BuzzFizz";
        }
        if ($i % 5 == 0 && $i % 3 != 0) {
            $ret .= "Buzz";
        }
        if ($i % 3 == 0 && $i % 5 != 0) {
            $ret .= "Fizz";
        }
        if ($i % 3 != 0 && $i % 5 != 0) {
            $ret .= $i;
        }
    }

    return $ret;
}
