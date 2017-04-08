<?php

//$textRegexp = '/^(\w+)=\1$/'; //dowolny znak wyrazu 1 lub wiecej razy
//// rowna sie
//// \1 - przechwycenie pierwszego nawiasu
//$text = 'Ala78=Ala78';
//var_dump(preg_match($textRegexp, $text));


//// zamiast #? mozna #{1} jesli chce sie byc pewnym jednego hasza
//$hexRegexp = '/^#?([a-f0-9]{6}|[a-f0-9]{3})$/'; 
//$hex = '#a54fbb';
//var_dump(preg_match($hexRegexp, $hex));


//$htmlTagRegexp = '/^<([a-z]+)([^<]+)*(?:>(.*)<\/\1>|\s+\/>)$/';
//$subject = "<span></span>";
//var_dump(preg_match($htmlTagRegexp, $subject));


$hourRegexp = '/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/';
// $hour = '5:19';
$hour = '05:19'; // dziala i to i to
var_dump(preg_match($hourRegexp, $hour));

