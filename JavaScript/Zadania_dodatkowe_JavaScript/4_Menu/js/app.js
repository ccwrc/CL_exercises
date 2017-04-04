
document.addEventListener("DOMContentLoaded", function () {

    var allMainLi = document.querySelectorAll("div>ul>li");

    for (var i = 0; i < allMainLi.length; i++) {

        allMainLi[i].addEventListener("mouseover", function () {
            if (this.querySelector("ul") !== null) {
                this.querySelector("ul").style.display = "inline-block";
            }
        });

        allMainLi[i].addEventListener("mouseout", function () {
            if (this.querySelector("ul") !== null) {
                this.querySelector("ul").style.display = "none";
            }
        });
    }


});