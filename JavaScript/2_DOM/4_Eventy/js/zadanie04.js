/* Zadanie 4
 Na stronie znajdują się trzy guziki i trzy liczniki (elementy span o klasie counter).
 Do każdego guzika dopisz event, który spowoduje, że przypisany do niego licznik
 zwiększy swoją wartość o 1 po kliknięciu w guzik. Pamiętaj, żeby wszystko pisać
 w evencie DOMContentLoaded. */

document.addEventListener("DOMContentLoaded", function () {

    var buttons = document.querySelectorAll("button");
    var allSpan = document.querySelectorAll("span");

    buttons[0].addEventListener("click", function () {
        allSpan[0].innerText = parseInt(allSpan[0].innerText) + 1;
    });

    buttons[1].addEventListener("click", function () {
        allSpan[1].innerText = parseInt(allSpan[1].innerText) + 1;
    });

    buttons[2].addEventListener("click", function () {
        allSpan[2].innerText = parseInt(allSpan[2].innerText) + 1;
    });

});