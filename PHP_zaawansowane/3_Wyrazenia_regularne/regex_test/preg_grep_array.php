<?php

$array = [4, 'test', 3.11, 0.5, 100, .6];
$fl_array = preg_grep('/^(\d+)?\.\d+$/', $array); //zwroc tabke z elementow, ktore spelniaja warunki
// dowolna cyfra 1 lub wiecej razy + to co po lewej najwyzej raz
// kropka jako kropka
// dowolna cyfra 1 lub wiecej razy
var_dump($fl_array);

// z dumpa:
//array (size=3)
//  2 => float 3.11
//  3 => float 0.5
//  5 => float 0.6