/* Zadanie 6
 Na stronie znajdują się dwie listy. Obok każdego wpisu (w obu listach) znajdują się przyciski.
 Napisz taki kod JavaScript, żeby po przyciśnięciu guzika element listy był przenoszony do 
 drugiej listy. Pamiętaj, że element może być przenoszony wiele razy (np. z listy 1 
 do listy 2, a potem z powrotem do listy 1). */

document.addEventListener("DOMContentLoaded", function () {

    var buttons = document.querySelectorAll("a.moveBtn");

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            var item = this.parentElement;

            if (item.parentElement === document.querySelector("ul#list1")) {
                document.querySelector("ul#list2").appendChild(item);
            } else {
                document.querySelector("ul#list1").appendChild(item);
            }

        });
    }


});