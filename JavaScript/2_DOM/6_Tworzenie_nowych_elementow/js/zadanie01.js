/* Zadanie 1
 Na stronie znajduje się tabela z informacjami na temat zamówień (z dwoma już wprowadzonymi
 zamówieniami). Poniżej znajduje się formularz do wypełnienia nowego zamówienia. Napisz 
 event, który pobierze informacje z inputów (el.value) i wprowadzi nowy wpis do tablicy. */

document.addEventListener("DOMContentLoaded", function () {

    var addButton = document.querySelector("#addBtn");

    addButton.addEventListener("click", function () {
        var inputOrder = document.querySelector("#orderId").value;
        var inputItem = document.querySelector("#item").value;
        var inputQuantity = document.querySelector("#quantity").value;

        var firstTr = document.querySelector("table#orders tr");
        var newOrder = firstTr.cloneNode(true);

        var allTd = newOrder.querySelectorAll("td");
        allTd[0].innerText = inputOrder;
        allTd[1].innerText = inputItem;
        allTd[2].innerText = inputQuantity;

        document.querySelector("table#orders").appendChild(newOrder);

    });


});