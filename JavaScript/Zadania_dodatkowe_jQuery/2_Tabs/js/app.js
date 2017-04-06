
$(document).ready(function () {

    var allLi = $("li");
    var allDivsWithText = $("div").find("div");

    allLi.each(function (index, element) {
        $(element).on("click", function () {
            allDivsWithText.hide();
            allDivsWithText.eq(index).slideToggle(400);
        });
    });


});