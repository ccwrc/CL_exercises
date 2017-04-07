<?php

mb_internal_encoding('UTF-16'); 
echo "dlugosc stringa w utf-16 <br/>";

$text = 'ąćżółęb';
$text2 = 'fgddsop';
echo mb_strlen($text);
echo "<br/>";
echo strlen($text2);
echo "<hr> mb get info"; 
var_dump(mb_get_info()); //MultiByte string
var_dump(mb_get_info()["internal_encoding"]);
http://php.net/manual/en/book.mbstring.php
    
mb_internal_encoding('UTF-8'); //ustawienie kodowania znakow na utf8
echo "<hr> mb get info po ust. utf-8";
var_dump(mb_get_info());
echo "<hr>";
echo "dlugosc stringa w utf-8 <br/>";
echo mb_strlen($text);
echo "<br/>";
echo strlen($text2);
