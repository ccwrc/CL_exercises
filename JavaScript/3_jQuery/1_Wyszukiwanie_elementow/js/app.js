/* Zadanie 1 -----------------------------------
 Dołącz do swojego pliku bibliotekę jQuery. W pliku app.js umieść kod sprawdzający, 
 czy DOM został załadowany. */

$(document).ready(function () {
    
    console.log("DOM załadowany");

    /* Zadanie 2 ----------------------------------
     Zapoznaj się z plikiem index.html oraz plikiem style.css. Dodaj klasę borderClass do każdego
     elementu li w elemencie section class="main". Pamiętaj, aby wykonać to w odpowiedniej funkcji.
     Znajdź wszystkie elementy o klasie showMore. Pierwszemu z tych elementów zmień kolor 
     fontu css() na niebieski. */

    $(".main li").addClass("borderClass");
    $(".showMore").first().css("color", "blue");

    /* Zadanie 3 -----------------------------------
     Ustaw każdemu elementowi li (tylko te w sekcji o klasie main) dodatkowe dwie klasy:
     colorText,
     backgroundElement. Znajdziesz je w pliku style.css pod odpowiednim komentarzem. 
     Łącznie z poprzednią klasą borderClassbędą to trzy klasy ustawione dla każdego li. 
     Ustaw także dla tych elementów następujące funkcje:
     fadeOut z bardzo wolnym zanikaniem,
     fadeIn z bardzo wolnym pojawianiem.
     
     Pamiętaj, aby zrobić to w odpowiedniej funkcji.
     Czy widzisz nadmiarowość w swoim kodzie? */

//  $(".main li").addClass("colorText backgroundElement");
//  $(".main li").fadeOut(3000);
//  $(".main li").fadeIn(3000);  //ponizej juz z wykorzystaniem each

//    $(".main").find("li").each(function () {
//        $(this).addClass("colorText backgroundElement");
//        $(this).fadeOut(2000);
//        $(this).fadeIn(2000);
//    });
    
/* Zadanie 4
Za pomocą jQuery wykonaj następujące operacje:
    - Wyszukaj wszystkie linki i ustaw im czerwony kolor za pomocą funkcji css().
    - Zmodyfikuj kod tak, aby kolor czerwony miały linki tylko z menu.
    - Dodaj klasę redLinks w pliku style.css (ustaw w niej kolor tekstu na czerwony) 
    i za pomocą addClass nadaj ją elementom li w menu.
    - Spraw, aby pierwszy element menu miał większy font niż inne. Stwórz odpowiednią 
    klasę w pliku style.css. Pamiętaj, aby wykonać to w odpowiedniej funkcji.  */    

//$(".menu a").css("color", "red");
$(".menu a").addClass("redLinks");
$(".menu a").first().addClass("fontTest4");



});