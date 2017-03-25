
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
//        console.log("text: " + selectEx2.options[i].text);
//        console.log("value: " + selectEx2.options[i].value);
        selectEx2.options[i].text = selectEx2.options[i].value;
        selectEx2.options[i].dataset.year = parseInt(selectEx2.options[i].value) + 20;
    }

    /* Zadanie 3
     Na stronie są trzy obrazki z ikonami najpopularniejszych przeglądarek internetowych.
     Niestety zarówno obrazki, jak i linki prowadzące do ich stron zawierają błędy. 
     Napisz kod JavaScript, który wprowadzi następujące zmiany:
     
     Poprawi elementy tak, żeby do każdej przeglądarki było podpięte odpowiednie logo 
     (obrazek jest nastawiany za pomocą background-image).
     Poprawi linki tak, żeby każdy miał poprawny opis i atrybut href.
     Poprawi szerokość elementu o klasie chrome (powinno być 100px).
     
     Podejrzyj w konsoli, jak wygląda kod CSS dopisany przez JavaScript. Zastanów się,
     dlaczego dopisywany jest w tym miejscu. Napisz odpowiedź na to pytanie w 
     komentarzu do zadania. */

    var divsEx3 = document.querySelectorAll("div.exercise.ex3 div");
    // console.log(divsEx3);
    // poprawianie chroma
    divsEx3[0].querySelector("div.chrome").style.width = "100px";
    divsEx3[0].querySelector("a").innerText = "Chrome";
    // poprawianie edzia
    divsEx3[2].querySelector("div").style.backgroundImage = "url('assets/img/edge.png')";
    divsEx3[2].querySelector("a").setAttribute("href", "https://www.microsoft.com/pl-pl/windows/microsoft-edge");
    // poprawa firefoxa
    divsEx3[4].querySelector("div").style.backgroundImage = "url('assets/img/firefox.png')";
    divsEx3[4].querySelector("a").setAttribute("href", "https://www.mozilla.org/pl/firefox/new/");
    divsEx3[4].querySelector("a").innerText = "Firefox";
    // kod css dopisywany jest bezposrednio w tagach html - jest on nadrzedny nad wszystkimi innymi

    /* Zadanie 4
     Na stronie jest lista, w której wpisz swoje imię i nazwisko, ulubiony kolor i potrawę.
     Wyszukaj wszystkie spany i zapisz je do odpowiednich zmiennych.
     Za pomocą innerHTML wypełnij w nich odpowiednie informacje.  */

    var spanName = document.getElementById("name");
    // ew. np. document.querySelector("div.exercise.ex4 span#name");
    var spanColor = document.getElementById("fav_color");
    var spanFood = document.getElementById("fav_meal");

    spanName.innerHTML = "Funky Koval";
    spanColor.innerHTML = "żółtobrązowoczerwnoniebieski";
    spanFood.innerHTML = "kły dzika w sosie sarny";



});
