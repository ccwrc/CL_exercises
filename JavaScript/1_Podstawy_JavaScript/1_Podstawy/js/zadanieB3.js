//Komentarze do kodu umieśc bezpośrednio pod linią w której znaleziono błąd

var i = 1;
// nie powinno być 0 tylko 1 (petla nieskonczona)
while (i < 100) {
// zamiast true<100 powinno byc i<100 
    console.log('Aktualna wartość zmiennej i to: ' + i);
    i = i * 2;
}

var year = 2017;
if (year % 4 == 0) {
// byl blad logiczny i przypisanie zamist porownania
    console.log('Rok przestępny');
} else { // nie bylo klamer {}
    console.log('Rok nieprzestępny');
}



console.log('Błędy poprawione, więc ten tekst będę widzieć w konsoli po uruchomieniu skryptu' + ' HURRRA!!!');
// . zamiast +