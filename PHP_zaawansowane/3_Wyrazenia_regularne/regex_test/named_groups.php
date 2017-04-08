<?php

//$regex = '/^(?P<etykieta>\w+)\+(?P=etykieta)=(?P=etykieta)$/';
//// ^ - poczatek
//// () pierwszy nawias - dowolny znak wyrazu 1 lub wiecej razy z etykieta o nazwie etykieta
//// \+ plus jako zwykly znak
//// drugi () - przechwycony wyraz z 1 () -> etykieta
//// rowna sie
//// trzeci () przechwycony wyraz z 1 () -> etykieta
//// $ - koniec wyrazenia
//$text = "test+test=test";
//var_dump(preg_match($regex, $text));


// wersja bez etykiety, to samo co na gorze
$regex = '/^(\w+)\+\1=\1$/';
$text = "test+test=test";
var_dump(preg_match($regex, $text));

