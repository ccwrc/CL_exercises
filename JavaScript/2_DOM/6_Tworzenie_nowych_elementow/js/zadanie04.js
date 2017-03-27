/* Zadanie 4
 Na stronie znajduje się lista z wpisami i guzik. Napisz taki event, żeby po kliknięciu w 
 guzik z listy zostały usunięte wszystkie jej dzieci. */

document.addEventListener("DOMContentLoaded", function () {

    var deathButton = document.querySelector("#remove");
    var childrens = document.querySelectorAll("ul.list li");
    var parent = document.querySelector("ul.list");

    deathButton.addEventListener("click", function () {
        for (var i = 0; i < childrens.length; i++) {
            parent.removeChild(childrens[i]);
        }
    });

});