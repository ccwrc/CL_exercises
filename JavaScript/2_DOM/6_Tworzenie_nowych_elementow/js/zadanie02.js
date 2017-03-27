/* Zadanie 2
 Na stronie przypisanej do zadania znajduje się lista i guzik. Dopisz odpowiednie 
 eventy do nich w taki sposób, żeby po kliknięciu w guzik dodał się nowy element 
 do listy. Element powinien mieć w sobie informacje na temat tego, ile elementów 
 jest w liście w chwili jego dodania. */

document.addEventListener("DOMContentLoaded", function () {

    var button = document.querySelector("a.button");

    button.addEventListener("click", function () {
        var list = document.querySelector("ul.menu");
        var before = list.children.length;
        var newLi = document.createElement("li");

        newLi.innerText = "Element nr: " + (before + 1) + " W chwili dodania było " + before + " elementów";
        list.appendChild(newLi);
    });


});