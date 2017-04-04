
document.addEventListener("DOMContentLoaded", function () {

    var images = document.querySelectorAll("div#gallery img");
    var showButton = document.querySelector("#showButton");
    var hideButton = document.querySelector("#hideButton");
    var inputTag = document.querySelector("#tagInput");

    showButton.addEventListener("click", function () {
        console.log("show");
    });

    hideButton.addEventListener("click", function () {
        console.log("hide");
    });



});
