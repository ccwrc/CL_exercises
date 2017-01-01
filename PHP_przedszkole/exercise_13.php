<?php

/* Napisz program który na podstawie wartości zmiennej n będzie rysował następujący schemat 
 * (tutaj dla n = 5):

* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * * 
* * * * * 
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5

Najpierw używając pętli zagnieżdżonych narysuj pierwszą połowę rysunku. Potem dopiero dopisz 
 * drugą parę pętli zagnieżdżonych która dorysuję resztę. */

$varN = 7;

echo "<pre>";

for ($i = 1; $i <= $varN; $i++) {
    for ($j = 1; $j <= $varN; $j++) {
        if ($i >= $j) {
            echo "*";
        } else {
            echo $j;
        }
    }
    echo "<br/>";
}

for ($i = 1; $i <= $varN; $i++) {
    for ($j = 1; $j <= $varN; $j++) {
        if ($j <= ($varN - $i + 1)) {
            echo "*";
        } else {
            echo $j;
        }
    }
    echo "<br/>";
}

echo "</pre>";
