
document.addEventListener("DOMContentLoaded", function () {
    /* Zadanie 1
     Wyszukaj na stronie i zapisz do odpowiednio nazwanej zmiennej tag article o klasie first.
     W kolejnym etapie:
     
     wypisz w konsoli, ile elementów h2 znajduje się w tym tagu.
     wyszukaj w nim wszystkie elementy o klasie oferts, przeiteruj je i wypisz je w konsoli,
     wyszukaj w nim wszystkie elementy div, przeiteruj je i wypisz je w konsoli.
     
     Pamiętaj, żeby za każdym razem sprawdzić, czy wczytałeś odpowiednie elementy. Używaj funkcji,
     które wyszukują wiele elementów. Za każdym razem wypisz w konsoli, ile jest znalezionych 
     przez Ciebie elementów. */

    var article = document.querySelector('article.first');
    console.log(article);

    var searchH2InArticle = article.querySelectorAll("h2");
    console.log("ilość h2 w article: " + searchH2InArticle.length);
    //alternatywa: article.getElemetByTagName('h2')

    var oferts = article.querySelectorAll(".oferts");
    console.log(oferts);
    console.log("ilosc znalezionych oferts: " + oferts.length);
    for (var i = 0; i < oferts.length; i++) {
        console.log(oferts[i]);
    }

    var divs = article.getElementsByTagName("div");
    console.log("ilosc znalezionych divs: " + divs.length);
    for (var i = 0; i < divs.length; i++) {
        console.log(divs[i]);
    }



});