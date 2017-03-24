
document.addEventListener("DOMContentLoaded", function () {
    var homeElement = document.getElementById("home");
    var childElements = document.querySelector(".oferts").children;
    var banner = document.querySelector(".ban");
    var blocks = document.querySelectorAll(".block");
    var links = document.querySelector(".links").children;

    /* Poniżej napisz kod rozwiązujący zadania */

    /* Zadanie 1
     W pliku js dopisz kod, który zamieni miejscami klasę i id dla elementu znajdującego
     się w zmiennej homeElement */

    var homeElementId = homeElement.getAttribute("id");
    var homeElementClass = homeElement.getAttribute("class");

    homeElement.setAttribute("class", homeElementId);
    homeElement.setAttribute("id", homeElementClass);



});
