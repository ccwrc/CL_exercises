/* Zadanie 2
 Na stronie znajduje się formularz do zamówienia. Jest w nim sekcja odpowiedzialna za
 wystawienie faktury. Napisz kod JavaScript, który spowoduje, że sekcja ta jest 
 widoczna tylko i wyłącznie wtedy, kiedy zaznaczony jest checkbox "Chcę otrzymać fakturę". */

document.addEventListener("DOMContentLoaded", function () {

// przy widocznosci submit zostaje na dole - mało eleganckie
// /////////////////////////////////////////////////////////
//    var checkbox = document.querySelector("#invoice");
//    var invoiceData = document.querySelector("#invoiceData");
//    invoiceData.style.visibility = "hidden";
//
//    checkbox.addEventListener("click", function () {
//        if (checkbox.checked) {
//            invoiceData.style.visibility = "visible";
//        } else {
//            invoiceData.style.visibility = "hidden";
//        }
//    });

    var checkbox = document.querySelector("#invoice");
    var invoiceData = document.querySelector("#invoiceData");
    invoiceData.style.display = "none"; //display ma wieksze mozliwosci

    checkbox.addEventListener("click", function () {
        if (checkbox.checked) {
            invoiceData.style.display = "";
        } else {
            invoiceData.style.display = "none";
        }
    });

//////////////////////// wersja na this
//    document.querySelector('input#invoice').addEventListener('click', function () {
//        if (this.checked) {
//            document.querySelector('div#invoiceData').style.display = '';
//        } else {
//            document.querySelector('div#invoiceData').style.display = 'none';
//        }
//    });

});