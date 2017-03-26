/* Zadanie 1
 W pliku znajdują się trzy listy (każda osadzona w elemencie div). Po najechaniu 
 myszką na element div zmienić się mają kolory tła elementów jego listy. Odpowiednio:
 
 Pierwszy element w liście ma mieć kolor czerwony.
 Ostatni element w liście ma mieć kolor niebieski.
 Wszystkie inne elementy mają mieć kolor zielony.
 Po najechaniu myszką na element div dodaj mu klasę hovered, ale tylko jemu.
 
 Rozwiązanie musi spełniać następujące założenia:
 
 Na wszystkie divy musi być założony ten sam event.
 Elementy listy mają być wyszukane w zależności od this.  */

document.addEventListener("DOMContentLoaded", function () {

    var listDivs = document.querySelectorAll("div.listContainer");

    for (var i = 0; i < listDivs.length; i++) {
        listDivs[i].addEventListener("mouseover", function () {
            var ulElement = this.querySelector("ul.list");
            
            ulElement.firstElementChild.style.backgroundColor = "red";
            ulElement.lastElementChild.style.backgroundColor = "blue";
            
            for (var j = 1; j < ulElement.children.length - 1; j++) {
                ulElement.children[j].style.backgroundColor = "green";
            }
            this.classList.add("hovered");
        });
    }
});
