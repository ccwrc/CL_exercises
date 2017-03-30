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




});