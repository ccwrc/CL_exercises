/* Zadanie 3
 Za pomocą JavaScript lub jQuery dopisz do wszystkich divów o klasie color następujący event:
 
 Po najechaniu kursorem myszy na div jego kolor zmieni się na losowy, a na divie pokaże się 
 tekst trzymany w data-text.
 Po zjechaniu z diva tekst ma zniknąć, a kolor – nie.
 Ponowne najechanie powinno zmienić kolor tła i znowu wyświetlić tekst.  */

$(document).ready(function () {

    var colorDivs = $(".color");
    colorDivs.height(20);

    colorDivs.each(function () {
        $(this).on("mouseover", function () {
            $(this).css("background-color", "#" + Math.floor(Math.random() * 16777215).toString(16));
            $(this).text($(this).attr("data-text"));
        });

        $(this).on("mouseleave", function () {
            $(this).text("");
        });
    });


});