<?php

/* Napisz funkcję printTable($array) która w pętli przejdzie po wszystkich elementach tablicy i 
 * wypisze je na ekranie. */

$testArray = ['123w', 'edw11', '1qa11', 'wew22', 'www', 'aa222', 'qq', '909'];


function printTable($testArray) {
    foreach ($testArray as $value) {
        echo $value . "<br/>";
    }
}

