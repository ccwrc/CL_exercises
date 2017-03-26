/* Zadanie 2 
 Na stronie znajdują się trzy guziki. Napisz jeden event dla wszystkich guzików,
 który ma być podpięty do elementu rodzica o id bubblingButtons, który spowoduje,
 że po kliknięciu licznik znajdujący się w atrybucie data-counter zwiększy
 wartość o jeden. Pamiętaj, żeby wszystko pisać w evencie DOMContentLoaded. */

document.addEventListener("DOMContentLoaded", function () {

    var parentBubblingButtons = document.querySelector("#bubblingButtons");

    parentBubblingButtons.addEventListener("click", function (event) {
        event.target.dataset.counter = parseInt(event.target.dataset.counter) + 1;
    });

});