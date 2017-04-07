<?php

/* Zadanie 2
  Napisz funkcję, która powinna przyjmować adres email (napis w postaci imię.nazwisko@firma.com.pl)
 * i zwracać tablicę z wszystkimi alisami odpowiedniono zaczynającymi się od i.nazwisko@ 
 * lub nazwisko@ i kończących się na @firma.pl lub @poczta.firma.pl. 

 * input -> jan.kowalski@ccwrc.com.pl
 * output -> j.kowalski@ccwrc.com.pl, kowalski@ccwrc.com.pl, jan.kowalski@ccwrc.pl,
 *  jan.kowalski@poczta.ccwrc.pl
 *  */

function aliasArray($mail) {
    $mailArray = explode(".", str_replace("@", ".", $mail));
    $name = $mailArray[0];
    $surname = $mailArray[1];
    $company = $mailArray[2];

    $aliasArray = [];
    $aliasArray[] = $name[0] . "." . $surname . "@" . $company . ".com.pl";
    $aliasArray[] = $surname . "@" . $company . ".com.pl";
    $aliasArray[] = $name . "." . $surname . "@" . $company . ".com.pl";
    $aliasArray[] = $name . "." . $surname . "@poczta." . $company . ".pl";

    return $aliasArray;
}

$mail = "jan.kowalski@ccwrc.com.pl";
var_dump(aliasArray($mail));

// ponizej wersja alternatywna
//function getAllEmailAliases($email) {
//    $emailArr = explode('@', $email);
//    $loginArr = explode('.', $emailArr[0]);
//    $domainArr = explode('.', $emailArr[1]);
//
//    $aliases = []; // ponizej rzutowanie na string
//    $aliases[] = (string) $loginArr[0][0] . '.' . $loginArr[1] . '@' . $emailArr[1];
//    $aliases[] = $loginArr[1] . '@' . $emailArr[1];
//    $aliases[] = $emailArr[0] . '@' . $domainArr[0] . '.' . $domainArr[2];
//    $aliases[] = $emailArr[0] . '@poczta.' . $domainArr[0] . '.' . $domainArr[2];
//
//    return $aliases;
//}
