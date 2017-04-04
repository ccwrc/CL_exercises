
document.addEventListener("DOMContentLoaded", function () {

    var images = document.querySelectorAll("div#gallery img");
    var showButton = document.querySelector("#showButton");
    var hideButton = document.querySelector("#hideButton");
    var inputTag = document.querySelector("#tagInput");

    showButton.addEventListener("click", function () {
        console.log(inputTag.value);
        var show = inputTag.value;
        inputTag.value = "";
        for (var i = 0; i < images.length; i++) {
            if (images[i].dataset.tag.indexOf(show) > 0) {
                images[i].classList.remove("invisible");
            } else { // dodane zeby uniknac balaganu w obrazkach na stronie
                images[i].classList.add("invisible");
            }
        }
    });

    hideButton.addEventListener("click", function () {
        console.log(inputTag.value);
        var hide = inputTag.value;
        inputTag.value = "";
        for (var i = 0; i < images.length; i++) {
            if (images[i].dataset.tag.indexOf(hide) > 0) {
                images[i].classList.add("invisible");
            } else {
                images[i].classList.remove("invisible");
            }
        }
    });


});
