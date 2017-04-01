/* Zadanie 2
 Wykonaj następujące polecenia:
 
 Znajdź wszystkie elementy o klasie sample_class i wypisz w konsoli ich tagi.
 Znajdź element o id sample_id i wypisz w konsoli jego wszystkie klasy.
 Znajdź wszystkie elementy listy znajdujące się w elemencie o klasie sample_class_2 i wypisz 
 znajdujący się w nich tekst.
 Znajdź wszystkie linki i wypisz adresy, na które wskazują.
 Znajdź element o klasie sample_class_3 i wypisz w konsoli tagi wszystkich jego dzieci.
 
 Korzystaj z JavaScriptu lub jQuery. */

document.addEventListener("DOMContentLoaded", function () {

    // Znajdź wszystkie elementy o klasie sample_class i wypisz w konsoli ich tagi.
    var allSampleClass = document.querySelectorAll(".sample_class");
    console.log("all elements with sample class");
    for (var i = 0; i < allSampleClass.length; i++) {
        console.log(allSampleClass[i].tagName);
    }

    // Znajdź element o id sample_id i wypisz w konsoli jego wszystkie klasy
    console.log("element o id sample_id i jego klasy");
    var idSampleId = document.querySelector("#sample_id");
    console.log(idSampleId.classList);

    //  Znajdź wszystkie elementy listy znajdujące się w elemencie o klasie sample_class_2 i wypisz 
    //  znajdujący się w nich tekst
    console.log("all elements in element with sample_class_2");
    var elementSampleClass2 = document.querySelectorAll(".sample_class_2 ul li");
    for (var i = 0; i < elementSampleClass2.length; i++) {
        console.log(elementSampleClass2[i].innerText);
    }

    // Znajdź wszystkie linki i wypisz adresy, na które wskazują.
    console.log("all links");
    var allLinks = document.querySelectorAll("a");
    for (var i = 0; i < allLinks.length; i++) {
        if (allLinks[i].hasAttribute("href")) {
            console.log(allLinks[i].getAttribute("href"));
        }
    }

    // Znajdź element o klasie sample_class_3 i wypisz w konsoli tagi wszystkich jego dzieci.
    console.log("all children element with sample_class_3");
    var allChildren = document.querySelector(".sample_class_3").children;
    for (var i = 0; i < allChildren.length; i++) {
        console.log(allChildren[i].tagName);
    }


});