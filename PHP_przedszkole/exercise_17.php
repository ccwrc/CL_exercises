<?php

/* Napisz funkcję, która przyjmuje liczbę n jako argument i wyświetla n razy na stronie napis 
 * "Programowanie w PHP jest fajne!". */

function cool($argN) {
    for ($i = 0; $i < $argN; $i++) {
        echo "\"Programowanie w PHP jest fajne!\"<br/>";
    }
}

cool(11);

