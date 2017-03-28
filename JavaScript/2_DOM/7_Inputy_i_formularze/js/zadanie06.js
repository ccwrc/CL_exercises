/* Zadanie 6
 Na stronie znajduje się tablica z wynikami w lokalnych mistrzostwach piłkarskich.
 Poniżej znajduje się formularz, który wypełniają wszyscy sędziowie po ukończonych
 rozgrywkach. Napisz kod JavaScript w taki sposób, żeby po wybraniu odpowiednich
 drużyn nastąpiła walidacja:
 
 Obie drużyny muszą być różne.
 Liczba goli powinna być nieujemna.
 
 Jeżeli formularz zostanie zweryfikowany poprawnie, odpowiednia informacja o wyniku
 spotkania powinna pojawić się w tablicy. */

document.addEventListener("DOMContentLoaded", function () {

    var resultTable = document.querySelector("table.table-bordered");
    var newTr = document.createElement("tr");
    var newTdTeam1 = document.createElement("td");
    var newTdTeam2 = document.createElement("td");
    var newTdPoints = document.createElement("td");

    newTdTeam1.innerText = "bla"
    newTdTeam2.innerText = "bla1"
    newTdPoints.innerText = "bla1"

    var addTd = resultTable.appendChild(newTr);
    addTd.appendChild(newTdTeam1);
    addTd.appendChild(newTdTeam2);
    addTd.appendChild(newTdPoints);




});