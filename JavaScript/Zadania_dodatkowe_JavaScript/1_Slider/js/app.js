
document.addEventListener("DOMContentLoaded", function () {

    var next = document.querySelector("#nextPicture");
    var prev = document.querySelector("#prevPicture");
    var allLi = document.querySelectorAll("div ul li");
    var pictureIndex = 0;

    allLi[pictureIndex].classList.add("visible");

    next.addEventListener("click", function () {
        allLi[pictureIndex].classList.remove("visible");
        pictureIndex++;
        if (pictureIndex >= allLi.length) {
            pictureIndex = 0;
        }
        allLi[pictureIndex].classList.add("visible");
    });

    prev.addEventListener("click", function () {
        allLi[pictureIndex].classList.remove("visible");
        pictureIndex--;
        if (pictureIndex < 0) {
            pictureIndex = allLi.length - 1;
        }
        allLi[pictureIndex].classList.add("visible");
    });


});