<?php

/* Program dnia pewnego seminarium wygląda następująco:
    8-11 wykłady,
    12-13 dyskusje,
    14 obiad,
    15-18 prelekcje,
    19 kolacja. Napisz skrypt, który na podstawie godziny (zmienna $godzina) wyświetli informacje 
 * o wszystkich punktach dnia, które będą począwszy od danej godziny. Użyj instrukcji switch. 
 * Zakładamy, że podajemy tylko pełne godziny.    */

function timeSlip($hour) {
    switch ($hour) {
        case 8:
        case 9:
        case 11:
            echo "8-11 wykłady <br/>";
        case 12:
        case 13:
            echo "12-13 dyskusje <br/>";
        case 14:
            echo "14 obiad <br/>";
        case 15:
        case 16:
        case 17:
        case 18:
            echo "15-18 prelekcje <br/>";
        case 19:
            echo "19 kolacja";
            break;

        default:
            echo "o tej godzinie masz wolne";
    }
}


