/* Zadanie 1 
 Dołącz do swojego pliku bibliotekę jQuery. W pliku app.js umieść kod sprawdzający, 
 czy DOM został załadowany. */

$(document).ready(function () {
//    console.log("DOM załadowany");

/* Zadanie 2 
Zapoznaj się z plikiem index.html oraz plikiem style.css. Dodaj klasę borderClass do każdego
 elementu li w elemencie section class="main". Pamiętaj, aby wykonać to w odpowiedniej funkcji.
  Znajdź wszystkie elementy o klasie showMore. Pierwszemu z tych elementów zmień kolor 
  fontu css() na niebieski. */

  $(".main li").addClass("borderClass");
  $(".showMore").first().css("color", "blue");






});