<?php

function testFunction() {
    echo "start funkcji <br/>";
    echo "przed __FUNCTION__ | " . __FUNCTION__ . " | po __FUNCTION__";
}

//testFunction();


//echo __LINE__;
//// wyswietla numer linii, tu: 10
//// http://php.net/manual/en/language.constants.predefined.php


//echo __FILE__;
//// pelna sciezka do pliku w ktorej jest komenda, tu:
//// /home/blablablabla/7_Maile/path_tests.php


//echo __DIR__;
//// wyswietla pelna sciezke do folderu


//var_dump(__TRAIT__); //cecha
//// /homeblabla7_Maile/path_tests.php:25:string '' (length=0)


var_dump(__NAMESPACE__); // mowi samo za siebie


