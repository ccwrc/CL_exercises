/* Zadanie 2
 Za pomocą JavaScript lub jQuery wykonaj następujące polecenia:
 
 Znajdź wszystkie elementy o klasie sample_class i wypisz w konsoli ich tagi.
 Znajdź element o id sample_id_2 i wypisz w konsoli jego wszystkie klasy.
 Znajdź wszystkie elementy listy, której klasa to funny_text i wypisz znajdujący się w nich tekst.
 Znajdź wszystkie linki i wypisz adresy, na które wskazują.
 Znajdź element o id super_form i wypisz w konsoli tagi wszystkich jego dzieci. */

$(document).ready(function () {

    console.log("wszystkie elementy o klasie sample_class i wypisz w konsoli ich tagi");
    var allSampleClassTags = $(".sample_class");
    allSampleClassTags.each(function (index, element) {
        console.log($(this).prop("tagName"));
    });

    console.log("element o id sample_id_2 i wypisz w konsoli jego wszystkie klasyi");
    var elWithId2 = $("#sample_id_2");
    console.log(elWithId2.prop("class"));

    console.log("elementy listy, której klasa to funny_text i wypisz znajdujący się w nich tekst");
    var textInList = $(".funny_text").find("li");
    textInList.each(function () {
        console.log($(this).text());
    });

    console.log("Znajdź wszystkie linki i wypisz adresy, na które wskazują");
    var allLinks = $("a");
    allLinks.each(function () {
        console.log($(this).attr("href"));
    });

    console.log("element o id super_form i wypisz w konsoli tagi wszystkich jego dzieci");
    var allChildrens = $("#super_form").children();
    allChildrens.each(function () {
        console.log($(this).prop("tagName"));
    });


});