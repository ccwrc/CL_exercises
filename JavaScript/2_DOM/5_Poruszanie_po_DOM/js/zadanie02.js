/* Zadanie 2
 W pliku znajduje się kilka przycisków (są to odpowiednio postylowane linki). 
 Po kliknięciu w którykolwiek z nich – element, który znajduje się bezpośrednio
 pod nim, powinien zniknąć (jeżeli był widoczny) lub się pojawić 
 (jeżeli był niewidoczny). Rozwiązanie musi spełniać następujące założenia:
 
 Na wszystkie przyciski musi być założony ten sam event.
 Następny element ma być wyszukiwany zależnie od położenia this.
 Kod musi działać poprawnie i nie generować błędów (pamiętaj o sprawdzeniu,
 czy następny element nie równa się null).  */

document.addEventListener("DOMContentLoaded", function () {

    var buttons = document.querySelectorAll("a.button");

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            if (this.nextElementSibling !== null) {
                this.nextElementSibling.classList.toggle("hidden");
            }
        });
    }

});