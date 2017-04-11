<?php

/* Napisz funkcję, która jako argument otrzyma tablicę z następującymi adresami:

  MAIL,
  URL,
  IP.

  Funkcja następnie sprawdzi za pomocą filtrów, czy podane dane są prawidłowe. Funkcja ma
 * zwrócić tablicę zawierającą:

  pojedynczy klucz (czyli przekazany adres),
  wartość true lub false – w zależności od tego, czy adres jest prawidłowy czy nie. */

function filterTests($arrayToTest) {
    $ret = [];

    $ret[$arrayToTest[0]] = (bool) filter_var($arrayToTest[0], FILTER_VALIDATE_EMAIL);
    $ret[$arrayToTest[1]] = (bool) filter_var($arrayToTest[1], FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED);
    $ret[$arrayToTest[2]] = (bool) filter_var($arrayToTest[2], FILTER_VALIDATE_IP);

    return $ret;
}

$testArr = ['a@bla.com', 'http://www.pl', '1217.118.13.17'];

var_dump(filterTests($testArr));

// problem z url
// http://www.w3my.com/pl/php/filter_validate_url.html
// http://stackoverflow.com/questions/7003416/validating-a-url-in-php
// http://www.php.net/manual/en/filter.filters.flags.php