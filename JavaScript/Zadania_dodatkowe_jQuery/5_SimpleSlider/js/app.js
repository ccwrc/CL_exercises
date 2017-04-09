
$(document).ready(function () {

    var nextButton = $("#nextPicture");
    var prevButton = $("#prevPicture");
    var images = $(".slider").find("img");
    var imgIndex = 0;
    var imgWidth = 400;

    nextButton.on("click", function () {
        imgIndex++;
        if (imgIndex > images.length - 1) {
            imgIndex = 5;
        }
        // minus przy imgIndex powoduje, ze mozna uzyc left zamiast rigth
        $("ul").animate({"left": -imgIndex * imgWidth + "px"}, 500);
    });

    prevButton.on("click", function () {
        imgIndex--;
        if (imgIndex < 0) {
            imgIndex = 0;
        }
        $("ul").animate({"left": -imgIndex * imgWidth + "px"}, 500);
    });


});