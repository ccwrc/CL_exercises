/* Zadanie 3
 Na stronie znajduje się guzik. Dopisz do niego event w taki sposób, żeby po 
 kliknięciu w niego guzik został usunięty ze strony. */

document.addEventListener("DOMContentLoaded", function () {

    var child = document.querySelector("#remove");
    var parent = document.querySelector("body");

    child.addEventListener("click", function () {
        parent.removeChild(child); //okrutne
    });

});