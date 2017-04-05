<?php

/* Zadanie 1

  Napisz trzy funkcje. Każda z nich powinna przyjmować adres email (napis w postaci
 * imię.nazwisko@firma.com.pl) i zwracać:

  1.Imię i nazwisko wyciągnięte z maila. Pamiętaj, że zarówno imię, jak i
 * nazwisko rozpoczynają się dużą literą.
  2.Nazwę firmy i nazwisko.
  3.Inicjały danej osoby */

$mail = "jan.koval@testowy.com.pl";

function getNameSurname($mail) {
    $mail = str_replace("@", ".", $mail);
    $mail = explode(".", $mail);
    return ["name" => ucfirst($mail[0]), "surname" => ucfirst($mail[1])];
}

function getCompanyAndSurname($mail) {
    $mail = str_replace("@", ".", $mail);
    $mail = explode(".", $mail);
    return ["company" => ucfirst($mail[2]), "surname" => ucfirst($mail[1])];
}

function getInitials($mail) {
    $mail = str_replace("@", ".", $mail);
    $mail = explode(".", $mail);
    return ["initials" => ucfirst($mail[0][0]) . ucfirst($mail[1][0])];
}

// wersja alt bez tablicy
//function nameSurname($mail) {
//    $newMail = str_replace('@', '.', $mail);
//    $mailArray = explode('.', $newMail);
//    return ucfirst($mailArray[0]) . ' ' . ucfirst($mailArray[1]);
//}
//
//function companySurname($mail) {
//    $mailArray = explode('.', str_replace('@', '.', $mail));
//    return ucfirst($mailArray[2]) . ' ' . ucfirst($mailArray[1]);
//}
//
//function mailInit($mail) {
//    $mailArray = explode('.', str_replace('@', '.', $mail));
//    return ucfirst($mailArray[0][0]) . ucfirst($mailArray[1][0]);
//}

// wersja 3
 function getNameAndSurnameFromEmail($email) {
    $emailArr = explode('@', $email);
    $nameSurname = str_replace('.', ' ', $emailArr[0]);
    
    return ucwords($nameSurname);
}

function getCompanyNameAndSurname($email) {
    $emailArr = explode('@', $email);
    $companyArr = explode('.', $emailArr[1]);
    $nameArr = explode('.', $emailArr[0]);

    return $companyArr[0] . ' ' . ucfirst($nameArr[1]);
}

function getInitialsFromEmail($email) {
    $emailArr = explode('@', $email);
    $nameArr = explode('.', $emailArr[0]);
    
    return ucfirst($nameArr[0][0]) . '.' . ucfirst($nameArr[1][0]) . '.';
}
