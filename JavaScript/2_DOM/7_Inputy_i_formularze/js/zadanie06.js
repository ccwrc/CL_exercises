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

    document.querySelector("p button").addEventListener("click", function (e) {
        var team1 = document.querySelector("#team1").value;
        var team2 = document.querySelector("#team2").value;
        var points1 = document.querySelector("#points1").value;
        var points2 = document.querySelector("#points2").value;

        if ((team1 !== team2) && (points1 >= 0) && (points2 >= 0)) {
            var trToClone = document.querySelector("table tbody tr:nth-child(3)");
            var newTr = trToClone.cloneNode(true);
            allTd = newTr.querySelectorAll("td");

            allTd[0].innerText = team1;
            allTd[1].innerText = team2;
            allTd[2].innerText = points1 + " - " + points2;
            document.querySelector("table tbody").appendChild(newTr);

            e.preventDefault();
        } else {
            e.preventDefault();
        }

    });

});