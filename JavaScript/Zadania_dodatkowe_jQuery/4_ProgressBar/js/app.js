
$(document).ready(function () {

    var progressBar = $(".progress-bar");
    var buttons = $(".changeBar");

    buttons.on("click", function () {
        var id = $(this).data("id");
        var width = $(this).data("width") + "%";
        var color = $(this).data("color");

        var divWithSpan = progressBar.filter("#bar" + id);
        var barSpan = divWithSpan.find("span");
        
        barSpan.removeClass();
        barSpan.addClass(color);
        // http://stackoverflow.com/questions/14297985/jquery-animate-width-to-the-right
        barSpan.animate({width: width}, 500);
    });

});