<?php

$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
// rozdziel wg. dowolny znak bialy bialy lub przecinek
// + - moga byc nawet 3 spacje
var_dump($keywords);

// wynik dumpa
//array (size=3)
//  0 => string 'hypertext' (length=9)
//  1 => string 'language' (length=8)
//  2 => string 'programming' (length=11)