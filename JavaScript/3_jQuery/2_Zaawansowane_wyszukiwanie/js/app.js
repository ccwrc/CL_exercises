/* Zadanie 1 
 Znajdź w pliku index.html element o klasie shopping, a następnie wykonaj poniższe czynności:
 Po kliknięciu w przycisk Dodaj ustaw mu klasę added, oraz pojedynczemu elementowi
 div zawierającemu produkt zmieni obramowanie na zielone.
 Po ponownym kliknięciu zresetuj ustawienia elementu .cart-item.  */

$(document).ready(function () {

//    $(".shopping").find('button').on("click", function () {
//        if (!$(this).hasClass("added")) {
//            $(this).addClass("added");
//            $(this).closest(".cart-item").addClass("cart-updated");
//        } else {
//            $(this).removeClass("added");
//            $(this).closest(".cart-item").removeClass("cart-updated");
//        }
//    });  // zadanie 1, wersja 1

    $(".shopping").find("button").on("click", function () {
        $(this).toggleClass("added");
        $(this).closest(".cart-item").toggleClass("cart-updated");
    }); // zadanie 1, wersja 2

    /* Zadanie 2
     Znajdź w pliku index.html element o klasie films, zmień kod następująco:
     1. Po kliknięciu w przycisk rozwiń, rozwinie się opis filmu.
     2. Po kliknięciu w przycisk zamknij, zwinie się opis filmu (tylko ten, który chcemy 
     zwinąć, nie wszystkie).
     3. Po kliknięciu w zamknij, zwiną się wszystkie opisy.  */

    $(".films").find("a.expand").on("click", function () {
        event.preventDefault();
        $(this).parent().next().slideDown("slow");
    }); // 1

//    $(".films").find("a.close").on("click", function () {
//        event.preventDefault();
//        $(this).parent().slideUp("slow"); //.hide();
//    }); // 2

    $(".films").find("a.close").on("click", function () {
        event.preventDefault();
        $(".container").slideUp("slow");
    }); //3


});