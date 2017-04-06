
$(document).ready(function () {

    var nav = $("nav");
    var positionMenu = nav.position().top;

    $(window).on("scroll", function () {
        var positionDoc = $(document).scrollTop();
        if (positionDoc > positionMenu) {
            nav.addClass("sticky");
        } else {
            nav.removeClass("sticky");
        }
    });

    $(window).on("resize", function () {
        if (nav.hasClass("sticky")) {
            positionMenu = nav.position().top;
        }
    });

});