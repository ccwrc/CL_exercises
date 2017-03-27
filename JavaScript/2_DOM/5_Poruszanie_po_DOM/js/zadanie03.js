/* Zadanie 3
 W pliku znajduje się kilka przycisków (są to odpowiednio postylowane linki). 
 Po kliknięciu w którykolwiek z nich jego rodzic ma zmienić kolor tła (na losowy).
 Rozwiązanie musi spełniać następujące założenia:
 
 Na wszystkie przyciski musi być założony ten sam event.
 Rodzic ma być wyszukiwany zależnie od położenia this.
 Kolor tła musi być losowy.
 
 Hint: Żeby uzyskać losowy kolor, użyj poniższego kodu:
 var randomColor = "#" + Math.floor(Math.random()*16777215).toString(16); */

document.addEventListener("DOMContentLoaded", function () {

    var buttons = document.querySelectorAll("a.button");

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            this.parentElement.style.backgroundColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
        });
    }

});