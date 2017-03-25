
document.addEventListener("DOMContentLoaded", function () {

    /* Zadanie 1 
     Zmodyfikuj listę w następujący sposób:
     
     Dodaj atrybut data-direction nastawiony na wartość up każdemu elementowi li,
     który nie ma tego atrybutu.
     Nastaw kolor tła co drugiego elementu listy na zielony.
     Nastaw piątemu elementowi listy klasę big.
     Nastaw co trzeciemu elementowi podkreślenie. */

    var listLiWithoutData = document.querySelectorAll("div.exercise.ex1 li:not([data-direction])");
    for (var i = 0; i < listLiWithoutData.length; i++) {
        listLiWithoutData[i].dataset.direction = "up";
        // ewentualnie: [i].setAttribute('data-direction', 'up');
    }

    var allLiInExe1 = document.querySelectorAll("div.exercise.ex1 li");
    for (var i = 0; i < allLiInExe1.length; i++) {
        if (i % 2 !== 0) { //jest co drugi, linki na stronie liczymy od 1
            allLiInExe1[i].style.backgroundColor = "green";
        }
        if (i === 4) {
            allLiInExe1[i].classList.add("big");
        }
        if (i % 3 === 0) {
            allLiInExe1[i].style.textDecoration = "underline";
        }
    }

    /* Zadanie 2
     W zadaniu (plik index.html) znajduje się prosty formularz z polem wyboru select.
     Ustaw każdemu elementowi option wartość opisu z atrybutu value. 
     Dodaj każdemu elementowi atrybut data-year, użyj dataset, ale wynikowa wartość
     ma być o 20 większa niż w atrybucie value, czyli np. 2020 -> 2040. */

    var selectEx2 = document.querySelector("div.exercise.ex2 select");
    for (var i = 0; i < selectEx2.options.length; i++) {
        console.log("text: " + selectEx2.options[i].text);
        console.log("value: " + selectEx2.options[i].value);

        selectEx2.options[i].text = selectEx2.options[i].value;
        selectEx2.options[i].dataset.year = parseInt(selectEx2.options[i].value) + 20;
    }



















});
