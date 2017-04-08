<?php

$text = '[[Ala ma kota]] [[Ale kot nie ma Ali]]';

// .* - kwantyfikator zwykly
// .*? - k. leniwy

//$regexp = '/\[\[.*\]\]/';
//preg_match_all($regexp, $text, $matches);
//var_dump($matches); // jedno trafienie


//$regexp = '/\[\[[^\]]*\]\]/';
//preg_match_all($regexp, $text, $matches);
//var_dump($matches); // 2 trafienia


$regexp = '/\[\[.*?\]\]/';
preg_match_all($regexp, $text, $matches);
var_dump($matches); // 2 trafienia
