<?php

$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1} 1,${3} ${2}'; // ${1} - pierwszy nawias + spacja
// 1,
// ${3} trzeci nawias spacja
// ${2} drugi nawias
echo(preg_replace($pattern, $replacement, $string));
// wynik:  April 1,2003 15

