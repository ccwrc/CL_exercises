<?php
/* Zadanie 3
Napisz funkcję która wyczyści z napisu wszystkie znaki specjalne. */


function clearSpecialChars($text) {
    $regexp = '/[^\w\s]/';
    // preg_replace($pattern, $replacement, $string)
    return preg_replace($regexp, '', $text);
}


$testText = 'test.*[text]    ano t   her(test)$';
var_dump(clearSpecialChars($testText));

