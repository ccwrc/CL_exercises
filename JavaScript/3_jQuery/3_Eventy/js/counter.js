/* Zadanie 2
 W pliku counter.html znajduje się pusty formularz, umieść w nim pole textarea. 
 Poniżej pola ma znaleźć się licznik wpisanych aktualnie znaków w to pole np. 63/100. 
 Licznik ma zwiększać i zmniejszać swoją wartość po każdym wpisanym/usuniętym znaku. 
 Zablokuj możliwość wpisania więcej niż 100 znaków w to pole.
 
 Napis z liczbą wpisanych znaków ma zmieniać kolor:
 kolor fontu 	liczba wpisanych znaków
 zielony 	0–33
 zółty 	34–66
 czerwony 	67–100
 
 Zadanie rozwiąż w pliku counter.js i pamietaj o podpięciu jQuery. */

//$(document).ready(function () {
//    var max = 100;
//    var count = 0;
//    var newSpan = $("<span>");
//    $("textarea").after(newSpan);
//
//    $("textarea").on("keyup", function () {
//        count = $(this)[0].value.length; console.log($(this));
//
//        if (count > max) {
//            $(this)[0].value = $(this)[0].value.substr(0, max);
//            count = max;
//        }
//        $("span")[0].innerText = count + "/" + max;
//
//        if (count < 34) {
//            $("span").css("color", "green");
//        } else if (count < 67) {
//            $("span").css("color", "yellow");
//        } else {
//            $("span").css("color", "red");
//        }
//    });
//});


// "uboższa" wersja alternatywna
$(function () {
    var newSpan = $("<span>");
    $("textarea").after(newSpan);
    var maxChar = 100;

    $("textarea").on("focus keyup", function () {
        var count = $(this).val().length;

        if (count > maxChar) {
            $(this).val($(this).val().substr(0, maxChar));
            count = maxChar;
        }

        $("span").text(count + "/" + maxChar);
        $("span").css("color", count >= 67 ? "red" : count >= 34 ? "yellow" : "green");
    });

});