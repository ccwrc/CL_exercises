
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

//    var article = document.querySelector("article.first");
//    console.log(article);
//
//    var searchH2InArticle = article.querySelectorAll("h2");
//    console.log("ilość h2 w article: " + searchH2InArticle.length);
//    //alternatywa: article.getElemetsByTagName('h2')
//
//    var oferts = article.querySelectorAll(".oferts");
//    console.log(oferts);
//    console.log("ilosc znalezionych oferts: " + oferts.length);
//    for (var i = 0; i < oferts.length; i++) {
//        console.log(oferts[i]);
//    }
//
//    var divs = article.getElementsByTagName("div");
//    console.log("ilosc znalezionych divs: " + divs.length);
//    for (var i = 0; i < divs.length; i++) {
//        console.log(divs[i]);
//    }
    
    /* Zadanie 2 
Wyszukaj na stronie i zapisz do zmiennej element o id exercise2, który znajduje się
 w menu. Skorzystaj z selektora CSS. Nie odwołuj się bezpośredniego do klasy lub id
  jakiegokolwiek elementu. Użyj selektorów potomków, dzieci, n-tych dzieci itp. */

//    var exer2 = document.querySelector("nav ul li:nth-child(5) a");
//    console.log("exer2: " + exer2);

/* Zadanie 3
Wyszukaj na stronie następujące elementy i zapisz je do odpowiednio nazwanych zmiennych:
    Element o id home (na dwa sposoby).
    Pierwszy element li nieposiadający atrybutu data-direction.
    Pierwszy element o klasie block.
Pamiętaj, żeby za każdym razem sprawdzić, czy wczytałeś odpowiedni element. Używaj 
funkcji wyszukujących tylko jeden element. */

var idHome = document.getElementById("home"); // 1 sposob
var idHome2 = document.querySelector("body header"); // 2 sposob
var idHome3 = document.querySelector("#home"); // 3 sposob
var firstLiWithoutData = document.querySelector("nav ul li:not([data-direction])");
var firstElWithBlockClass = document.querySelector(".block");

/* Zadanie 4
Wyszukaj na stronie następujące elementy i zapisz je do odpowiednio nazwanych zmiennych:
    Wszystkie elementy li znajdujące się w tagu nav.
    Wszystkie paragrafy należące do wszystkich elementów div.
    Wszystkie divy znajdujące się w tagu article.
Pamiętaj, żeby za każdym razem sprawdzić, czy wczytałeś odpowiednie elementy. 
Pamiętaj, żeby używać funkcji, które wyszukują wiele elementów. Za każdym razem 
wypisz w konsoli, ile znalazłeś elementów. */

var allLiInNavTag = document.querySelectorAll("nav li");
console.log("allLiInNavTag: " + allLiInNavTag.length);
var allParagraphsInDivs = document.querySelectorAll("div p");
console.log("allParagraphsInDivs: " + allParagraphsInDivs.length);
var allDivsInArticle = document.querySelectorAll("article div");
console.log("allDivsInArticle: " + allDivsInArticle.length);


});