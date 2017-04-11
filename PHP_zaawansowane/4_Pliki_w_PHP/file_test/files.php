<?php
// przed zapisem weryfikacja uprawnien folderu

$handle = fopen('file.txt', 'r+w');
// var_dump($handle);
// resource(3, stream)

echo "ctime <br/>";
var_dump(filectime("file.txt"));
echo "mtime <br/>";
var_dump(filemtime("file.txt"));



$content = fread($handle, filesize('file.txt'));
// var_dump($content);
// zawartosc pliku + (length=198)


//fwrite($handle, 'Tekst 11'); //zapisano na koncu linii
//fwrite($handle, 'Tekst 22'); // tez zapisano do pliku
fclose($handle);


//$readmeArr = file('file.txt'); //1 wiersz tablicy to 1 linia tekstu
//var_dump($readmeArr); // wyswietlenie pliku jako pojedynczy string w tablicy (1 element)


// var_dump(file_get_contents('file.txt')); // wyswietla jako zwykly string
// file_put_contents('file.txt', '-LAST-', FILE_APPEND); // dodaje wyrazenie na koniec pliku
