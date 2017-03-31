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
    
    //$("dd").fadeOut(500);
    $("dd").css("display", "none");
    $("dt").click(function () {
        $(this).next().toggle(); //alt .slideToggle()
    });
    
/* Zadanie 4
W pliku index.html znajdź formularz o klasie login. W pliku app.js stwórz funkcję, 
która będzie reagować na wciśnięcie przycisku show-hide-btn. Na początek ustaw event 
tak, aby po wciśnięciu wypisał w konsoli "działam". Następnie funkcja ma sprawdzać, 
jakiego typu jest element przechowujący hasło. Jeśli password – zmień type na text. 
Jeśli text – zmień na password. */    

$("button.show-hide-btn").on("click", function(e) {
    console.log("działam");
    
    if ($("input.user-pass").attr("type") === "text") {
        $("input.user-pass").attr("type", "password");
    } else {
        $("input.user-pass").attr("type", "text");
    }
    
    e.preventDefault();
});

    // alt 1
//    if ( $('input.user-pass')[0].type=='password') {
//            $('input.user-pass')[0].type = 'text';
//    } else {
//            $('input.user-pass')[0].type = 'password';
//    }
   // alt 2
//        var haslo = $(this).prev();
//
//        haslo.attr('type', haslo.attr('type') == 'text' ? 'password' : 'text');

/* Zadanie 5
Po najechaniu kursorem myszy na element w menu wypisz w konsoli tekst "Hura". */
    
    $("nav.menu").on("mouseenter", function() {
        console.log("Hura");
    }); // alt $('nav.menu').mouseover(function()
    
    
    
    
    


});