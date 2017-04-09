
$(document).ready(function () {

    var form = $("#contactForm");
    var inputName = $("#nameInput");
    var inputEmail = $("#emailInput");
    var inputMessage = $("#messageInput");
    var errorDiv = $("div.error");

    form.on("submit", function (event) {

        var name = inputName.val();
        var email = inputEmail.val();
        var message = inputMessage.val();

        if (name.length <= 5) {
            errorDiv.text("min. 6 znaków w name");
            event.preventDefault();
        }

        var regEx = new RegExp(/.*@.*\..*/);
        if (!regEx.test(email)) {
            errorDiv.text("błędny email");
            event.preventDefault();
        }

        if (message.length <= 10) {
            errorDiv.text("min. 10 znaków w message");
            event.preventDefault();
        }

    });


});