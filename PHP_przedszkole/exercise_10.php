<?php

/* Napisz program który na podstawie wartości zmiennej n 
 * będzie rysował następujący schemat (tutaj dla n = 5):

* * * * * 
* * * * *
* * * * *
* * * * *
* * * * * 

Musisz do tego użyć pętli zagnieżdżonych! */

$varN = 9;

for ($i = 0; $i < $varN; $i++) {
    for ($j = 0; $j < $varN; $j++) {
        echo "* ";
    }
    echo "<br/>";
}

