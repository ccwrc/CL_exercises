
$(document).ready(function () {

    var nextButton = $("#nextPicture");
    var prevButton = $("#prevPicture");
    var allLi = $("ul").find("li");
    var imgIndex = 0;
    var imgWidth = 400;

    nextButton.on("click", function () {
        imgIndex++;
        if (imgIndex >= 6) {
            imgIndex = 0;
        }
        // minus przy imgIndex powoduje, ze mozna uzyc left zamiast rigth
        $("ul").animate({"left": -imgIndex * imgWidth + "px"}, 500);
    });

    prevButton.on("click", function () { //smiec do poprawy
        imgIndex--;
        if (imgIndex < 0) {
            imgIndex = 5;
        }
        $("ul").animate({"left": -imgIndex * imgWidth + "px"}, 500);
    });

    /* Zmodyfikuj event tak, żeby po kliknięciu w przycisk:
     
     Zwiększyć zmienną przetrzymującą indeks obrazka.
     Sprawdzić, czy przypadkiem zmienna nie przekracza liczby wszystkich obrazków.
     Jeśli wszystko jest w porządku, zaanimuj przesuwanie slajdu (wykorzystaj własność left). 
     Pamiętaj, że element, który przesuwasz (ul), musi mieć ustawione w CSS position: relative. 
     Zastanów się, w którą stronę chcesz się przesuwać.
     */

});