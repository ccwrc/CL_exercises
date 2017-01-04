<?php

/* Korzystając z instrukcji switch napisz skrypt, który wyświetli nazwę miesiąca na podstawie 
 * zmiennej zawierającej numer miesiąca. */

function displayMonth($number) {
    switch ($number) {
        case 1:
            echo "styczeń";
            break;
        case 2:
            echo "luty";
            break;
        case 3:
            echo "marzec";
            break;
        case 4:
            echo "kwiecień";
            break;
        case 5:
            echo "maj";
            break;
        case 6:
            echo "czerwiec";
            break;
        case 7:
            echo "lipiec";
            break;
        case 8:
            echo "sierpień";
            break;
        case 9:
            echo "wrzesień";
            break;
        case 10:
            echo "październik";
            break;
        case 11:
            echo "listopad";
            break;
        case 12:
            echo "grudzień";
            break;
        default:
            echo "nieprawidłowy numer miesiąca";
    }
}


