<?php

// $regex = '/^ab$/'; // stosuj ' zamiast "
// jesli: server = post i jest ustawione haslo
// {    }

//$regex = '/^ab$/'; // dokładnie ab, abc nie bedzie juz pasowac
//// preg_match, preg_match_all 
//// zwraca 1 jesli jest dopasowanie, 0 brak dopasowania, false - błąd
//$text = 'ab';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^.xyz$/'; // 1 dowolny znak + xyz
//$text = '4xyzh';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^.xyz[ABC]$/'; // 1 dowolny znak + xyz + 1 dowolny znak z ABC
//$text = '4xyzB';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^.xyz[A-Z]$/'; // 1 dowolny znak + xyz + dowolna litera z przedzialu A-Z
//$text = '4xyzO';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^.xyz[^A-Z]$/'; //1 dowolny znak + xyz 
////+ dowolny znak z wykluczeniem przedzialu liter A-Z
//$text = '4xyz@';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^(.xyz)|([^A-Z])$/'; // dowolny znak + xyz
//// lub dowolny znak spoza przedzialu A-Z
//$text = 'A';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^.xyz[0-9]+\*$/'; // dowolny znak + xyz + 1 lub wiecej cyfra z przedzialu 0-9
//// + zwykła gwiazdka
//$text = '&xyz9898900008*';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^.xyz[0-8]{3}$/'; // dowolny znak + xyz + dokładnie 3 wystapienia
//// cyfry z przedzialu 0-8
//$text = '5xyz451';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/(\w+)([0-9])=\1\2/'; // 1 lub wiecej wystapien dowolnego znaku wyrazu +
//// cyfra z zakresu 0-9 = (przechwycenie 1 - znaki wyrazu)(przechwycenie 2 - cyfra)
//$text = 'alwwo1=alwwo1';
//if(preg_match($regex, $text, $matches) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}
//var_dump($matches);
//// wynik dumpa dla $text = 'Ala1=Ala1';
////array (size=3)
////  0 => string 'Ala1=Ala1' (length=9)
////  1 => string 'Ala' (length=3)
////  2 => string '1' (length=1)


//$regex = '/[a-z]*WW/iU'; // 0 lub wiecej liter z przedzialu a-z + 2x wielkie W, ale...
//// ignorowanie wielkosci liter + domyslne kwantyfikatory nie sa zachlanne
//$text = 'wwfgfdsdwz'; //czyli pasuje ww male na poczatku
//if(preg_match($regex, $text, $matches) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//} 


//$regex = '/[a-z]*WW./s'; // 0 lub wiecej wystapien liter z przedzialu a-z + 2x WW + dowolny znak
//// lub nowa linia, s oznacza, ze . moze robic takze za znak nowej linii
//$text = 'fgfdsdWW@z\n';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}


//$regex = '/^def/'; // na poczatku wyrazenia musi byc def
//$text = 'defabcdef123def';
//if(preg_match($regex, $text) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//}

//$regex = '/def/'; // preg_match_all - tu moze byc tylko jedno trafienie tego wyrazenia
//$text = 'dfabcdf123def';
//if(preg_match_all($regex, $text, $matches) == 1) {
//    echo 'Matched';
//} else {
//    echo 'Not matched';
//} var_dump($matches);

$regex = '/def/'; // preg_match_all - tu maja byc dokladnie 2 trafienia
$text = 'dfdeabcdef123def';
if(preg_match_all($regex, $text, $matches) == 2) {
    echo 'Matched';
} else {
    echo 'Not matched';
} 
var_dump($matches);
