/* Zadanie 8
 Na stronie znajdują się zagnieżdżone elementy. Do każdego dopisane są eventy. 
 Użyj metod stopPropagation i stopImmediatePropagation w taki sposób, aby:
 
 Wywoływały się eventy dla elementu pierwszego i drugiego, a nie wywoływał się event 
 dla elementu trzeciego.
 Wywoływały się wszystkie eventy dla elementu czwartego i pierwszy event dla elementu piątego. */

document.addEventListener("DOMContentLoaded", function () {
    var element1 = document.getElementById("element1");
    var element2 = document.getElementById("element2");
    var element3 = document.getElementById("element3");
    var element4 = document.getElementById("element4");
    var element5 = document.getElementById("element5");

    element1.addEventListener("click", function (event) {
        console.log("Click in element 1");
    });

    element2.addEventListener("click", function (event) {
        console.log("Click in element 2");
        event.stopPropagation();
    });

    element3.addEventListener("click", function (event) {
        console.log("Click in element 3");
    });

    element4.addEventListener("click", function (event) {
        console.log("Click in element 4");
    });

    element5.addEventListener("click", function blabla(event) {
        console.log("Click in element 5");
        //  this.removeEventListener("click", arguments.callee); // sposob 1
        this.removeEventListener("click", blabla); // sposob 2 - dodanie nazy funkcji
    });

});
