<?php

/* Napisz skrypt, który obliczy i wyświetli pole i obwód prostokąta o bokach zdefiniowanych 
 * w zmiennych $bokA i $bokB. */



function rectangle($a, $b) {
    $field = $a * $b;
    echo "Pole wynosi $field <br/>";
    $circuit = ((2 * $a) + (2 * $b));
    echo "Obwód wynosi $circuit <br/>";
}

