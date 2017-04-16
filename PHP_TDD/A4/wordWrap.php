<?php
/* Napisz funkcję wordWrap($string, $length), której zadaniem jest skrócić napis do podanej
 *  długości (i dodanie na końcu ...). Funkcja ma działać w taki sposób żeby, żadne słowo 
 * nigdy nie zostało przecięte. Napisz testy do tej funkcji. */

function newWordWrap ($string, $length) { //php posiada juz wbudowana funkcje wordwrap
    
    if (!is_string($string) || !is_int($length)) {
        return false;
    }
    
    $totalLength = strlen($string);
    
    if ($length < $totalLength) {
//        for ($i = $length-1; $i <= $totalLength-1; $i--) {
//            if ($string[$i] == " ") {
//                $newString = substr($string, 0, $i);
//                break;
//            } 
//        }
        
        $newString .= "...";
        return $newString;
    } else {
        return $string;
    }
    
}


$string = "bl aecar ble bue  baaa";
var_dump(newWordWrap("yy"));
//
//// http://php.net/manual/en/function.wordwrap.php
//var_dump(wordWrap($string, 9, "..."));

