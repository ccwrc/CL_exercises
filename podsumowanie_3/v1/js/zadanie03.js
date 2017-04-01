/* Zadanie 3
 Do wszystkich guzików znajdujących się na stronie dopisz event, który po naciśnięciu spowoduje,
 że na divie pokaże się tekst trzymany w data-text. Korzystaj z JavaScriptu lub jQuery. */

document.addEventListener("DOMContentLoaded", function () {

    var buttons = document.querySelectorAll("button");

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            document.getElementById("id1").innerText = this.getAttribute("data-text");
        });
    }

});