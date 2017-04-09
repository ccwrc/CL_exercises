
$(document).ready(function () {

    var form = $("#contactForm");
    var inputName = $("#nameInput");
    var inputEmail = $("#emailInput");
    var inputMessage = $("#messageInput");
    var errorDiv = $("div.error");
    // errorDiv.text("testerror");

    form.on("submit", function (event) {
        event.preventDefault();
        console.log("klikform");


    });


});