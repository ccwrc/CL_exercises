/* Zadanie 7
 Na stronie znajduje się jeden element div. Napisz dla niego event, który będzie 
 wypisywał położenie kursora myszy w chwili, gdy znajduje się nad tym elementem.
 Wyszukaj zarówno położenie kursora globalne (czyli odległość od górnego lewego 
 rogu okna), jak i lokalne (czyli odległość od lewego górnego rogu elementu).
 Pamiętaj, żeby wszystko pisać w evencie DOMContentLoaded. */

document.addEventListener("DOMContentLoaded", function () {

    var divBox = document.querySelector("#box");

    divBox.addEventListener("mousemove", function (event) {
        document.querySelector("#globalX").innerText = event.screenX;
        document.querySelector("#globalY").innerText = event.screenY;
        document.querySelector("#localX").innerText = event.clientX;
        document.querySelector("#localY").innerText = event.clientY;
    });


});