<?php

/* Napisz funkcję wordWrap($string, $length), której zadaniem jest skrócić napis do podanej
 *  długości (i dodanie na końcu ...). Funkcja ma działać w taki sposób żeby, żadne słowo 
 * nigdy nie zostało przecięte. Napisz testy do tej funkcji. */

function newWordWrap($string, $length) { //php posiada juz wbudowana funkcje wordwrap
    if (!is_string($string) || !is_int($length)) {
        return false;
    }

    if ($length < strlen($string)) {
        for ($i = $length - 1; $i >= 0; $i--) {
            if ($string[$i] == " ") {
                $newString = substr($string, 0, $i);
                return $newString .= "...";
            }
        }
        return "...";
    } else {
        return $string;
    }
}

//// http://php.net/manual/en/function.wordwrap.php
//var_dump(wordWrap($string, 9, "..."));

