
$(document).ready(function () {

    /* Punkt 3

Znajdź następujące elementy i zapisz je do zmiennych:

    Wszystkie elementy listy odpowiadające tabom.
    Wszystkie divy odpowiadające tekstom.

Sprawdź, czy wyszukałeś odpowiednie elementy i czy ich liczba się zgadza.

Wypisz zmienne w konsoli, żeby upewnić się, czy zawierają poprawne dane. */
    
    var allLi = $("li");
    console.log(allLi);
    
    var allDivsWithText = $("div").find("div");
    console.log(allDivsWithText);

});