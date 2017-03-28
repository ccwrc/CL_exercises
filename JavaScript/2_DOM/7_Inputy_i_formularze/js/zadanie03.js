/* Zadanie 3
 Na stronie znajduje się formularz do zamówienia pizzy. W formularzu znajduje się 
 pole z checkboksami, w którym użytkownik może wybrać sobie dodatki. 
 Cena każdego z dodatków jest trzymana w atrybucie data-price. Napisz takie eventy,
 żeby po zaznaczeniu checkoxa wyświetlała się poprawna kwota zamówienia oraz po 
 wysłaniu formularza wyświetlił się alert z wyliczoną kwotą. Zwróć uwagę na dwa
 specjalne checkboksy:
 
 none – powinien odznaczyć wszystkie inne opcje,
 all – powinien zaznaczyć wszystkie inne opcje (poza none).  */

document.addEventListener("DOMContentLoaded", function () {

    var allCheckboxes = document.querySelectorAll("form input");
    var displayPrice = document.querySelector("span#price");
    displayPrice.innerText = parseFloat(0).toFixed(2) + " zł";// spojnosc wygladu 0.00zł zamiast 0zł

    // zaznaczenie wszystkich dodatkow
    allCheckboxes[0].addEventListener("click", function () {
        if (this.checked) {
            var sumOfAdds = 0.00;
            for (var i = 1; i < allCheckboxes.length - 1; i++) {
                allCheckboxes[i].checked = true;
                var elementPrice = allCheckboxes[i].dataset.price;
                sumOfAdds += parseFloat(elementPrice);
            }
            displayPrice.innerText = parseFloat(sumOfAdds).toFixed(2) + " zł";
        } else {
            for (var i = 1; i < allCheckboxes.length - 1; i++)
                allCheckboxes[i].checked = false;
            displayPrice.innerText = parseFloat(0).toFixed(2) + " zł";
        }
    });

    // odznaczenie wszystkich dodatkow
    allCheckboxes[allCheckboxes.length - 1].addEventListener("click", function () {
        if (this.checked) {
            for (var i = 0; i < allCheckboxes.length; i++)
                allCheckboxes[i].checked = false;
            displayPrice.innerText = parseFloat(0).toFixed(2) + " zł";
        }
    });

    // dodatki
    for (var i = 1; i < allCheckboxes.length - 1; i++) {
        allCheckboxes[i].addEventListener("click", function () {
            var addsPrice = parseFloat(this.dataset.price).toFixed(2);
            var addsSum = displayPrice.innerText.replace(" zł", "");
            var addsSum = parseFloat(addsSum).toFixed(2);
            if (this.checked) {
                displayPrice.innerText = (parseFloat(addsSum) + parseFloat(addsPrice)).toFixed(2) + " zł";
            } else {
                displayPrice.innerText = (parseFloat(addsSum) - parseFloat(addsPrice)).toFixed(2) + " zł";
                allCheckboxes[0].checked = false;
            }
        });
    }

    // alert z kwota po kliknieciu submit
    document.querySelector("button.btn").addEventListener("click", function () {
        alert(displayPrice.innerText);
    });


});