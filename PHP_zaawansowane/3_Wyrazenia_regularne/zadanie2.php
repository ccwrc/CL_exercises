<?php

/* Zadanie 2
  Napisz funkcję która znajdzie w tekście wszystkie cytaty i zwróci je w postaci tablicy z napisami.
 *  Dla uproszczenia zakładamy że cytaty są otoczone cudzysłowami. Np.:
 * $citeArray = findCitations('To jest jakiś tekst. "To jest cyctat1". To jest 
  dalsza część tekstu. "To jest drugi cyctat".');
 * 
 * Powinno zwrócić następującą tablicę:
  ["To jest cyctat1", "To jest drugi cyctat"] */

function findCitations($string) {
    $regExp = "/\".*?\"/";
    preg_match_all($regExp, $string, $matches);
    return $matches;
}

var_dump(findCitations('To jest jakiś tekst. "To jest cyctat1". 
To jest dalsza część tekstu. "To jest drugi cyctat".'));

