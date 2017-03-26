/* Zadanie 1 
 Uruchom stronę przygotowaną dla zadania 1. Sprawdź w konsoli, czy są jakieś błędy. Następnie:
 Przenieś tag <script> do sekcji <head>. Zobacz, co się zmieniło w działaniu skryptu. 
 Spróbuj to wytłumaczyć.
 Stwórz event DOMContentLoaded dla elementu document i przenieś kod do środka tego eventu. 
 Czy poprawiło to sytuację?
 Przenieś znowu tag <script> na koniec pliku – czy jest jakaś różnica? */

// 1. po przeniesieniu script z konca do head pojawil sie blad odczytu wlasciwosci
// powod: proba wykonania operacji js na drzewie dom przed jego zaladowaniem

// 2. po dodaniu eventu, wszystko jest ok, operacje sa wykonywane na ist. drzewie dom

// 3. tag script z powrotem na koncu pliku - jest ok

document.addEventListener("DOMContentLoaded", function () {

    var menu = document.querySelector("#menu");
    var paragraf = document.querySelector("p");

    menu.classList.add("menu");
    paragraf.innerHTML = "A to jest paragraf w zadaniu 1";

});