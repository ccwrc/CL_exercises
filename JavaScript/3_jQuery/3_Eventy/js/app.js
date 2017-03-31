/* Zadanie 1 
 Znajdź w pliku index.html trzy buttony w elemencie o klasie hero-buttons. 
 Stwórz funkcję, w której wykonaj następujące czynności:
 
 ustaw każdy z trzech przycisków pod inną zmienną,
 dla elementu pierwszego ustaw event click, który po kliknięciu wyświetli w konsoli napis
 "kliknięto mnie",
 dla elementu drugiego ustaw event click, który po kliknięciu wyświetli w konsoli napis 
 "kliknięto mnie, ale już drugi raz nie dam się kliknąć",
 dla trzeciego wywołaj metodę off, która odczepi wszystkie eventy z wszystkich przycisków.
 
 Przetestuj działanie Twojej funkcji. */

$(document).ready(function () {

    var button1 = $("button.ironMan-btn");
    var button2 = $("button.thor-btn");
    var button3 = $("button.wolverine-btn");

    button1.on("click", function () {
        console.log("kliknięto mnie");
    });
    // alt button1.click(function() {console.log('kliknięto mnie')});

    button2.one("click", function () {
        console.log("kliknięto mnie, ale już drugi raz nie dam się kliknąć");
    });

    button3.on("click", function () {
        button1.off("click");
        button2.off("click");
        $(this).off("click"); // alt .find("button").off();
    });

/* Zadanie 3
Znajdź w pliku html sekcję o klasie superhero-description, a następnie napisz funkcję, w której:

    Ukryj domyślnie wszystkie elementy dd.
    Po kliknięciu w element dt spraw, by elementy dd:

    rozwijały się, jeśli są ukryte,
    zwijały się, jeśli są widoczne.  */
    
    $("dd").fadeOut(500);

    $("dt").click(function () {
        $(this).next().toggle(); //alt .slideToggle()
    });




});