/* Zadanie 6
 Na stronie znajdują się trzy elementy div, dla których napisz wspólny event zmieniający
 kolor tła tylko w klikniętym divie. Użyj do tego słowa kluczowego this. 
 Pamiętaj, żeby wszystko pisać w evencie DOMContentLoaded.
 
 Hint: Żeby uzyskać losowy kolor użyj poniższego kodu:
 var randomColor = "#" + Math.floor(Math.random()*16777215).toString(16);   */

document.addEventListener("DOMContentLoaded", function () {

    var colorDivs = document.querySelectorAll("div.box");

    for (var i = 0; i < colorDivs.length; i++) {
        colorDivs[i].addEventListener("click", function (event) {
            this.style.backgroundColor = "#" + Math.floor(Math.random()*16777215).toString(16);
        });
    }


});