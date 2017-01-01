<?php

/* Napisz program który na podstawie wartości zmiennej n będzie rysował następujący 
 * schemat (tutaj dla n = 5):

  *   *   
*   *   *
  *   *  
*   *   *
  *   *   

Musisz do tego użyć pętli zagnieżdżonych a w wewnętrznej pętli dodać if który będzie 
 * sprawdzał odpowiedni warunek (jeżeli (i + j) jest nieparzyste to ma być gwiazdka). */

$varN = 9;
// pre html http://funkcje.net/view/4/2517/index.html

echo "<pre>";
for ($i = 0; $i < $varN; $i++) {
    for ($j = 0; $j < $varN; $j++) {
        if ((($i+$j)%2) == 0) {
            echo " ";
        } else {
            echo "*";
        }
    }
    echo "<br/>";
}
echo "</pre>";
