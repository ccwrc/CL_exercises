/* Zadanie 5
 Na stronie znajdują się trzy guziki i jeden licznik. Napisz jeden wspólny event dla 
 wszystkich guzików, który spowoduje, że po kliknięciu w guzik licznik zwiększy 
 wartość o jeden. Pamiętaj, żeby wszystko pisać w evencie DOMContentLoaded. */

document.addEventListener("DOMContentLoaded", function () {

    var allButtons = document.querySelectorAll("button");

    allButtons.forEach(function (item) {
        item.addEventListener("click", function () {
            document.querySelector("span").innerHTML = parseInt(document.querySelector("span").innerHTML) + 1;
        });
    });

});