
document.addEventListener("DOMContentLoaded", function () {

    var allLi = document.querySelectorAll("div ul li img");
    var body = document.querySelector("body");

    for (var i = 0; i < allLi.length; i++) {
        allLi[i].addEventListener("click", function () {
            var source = this.getAttribute("src");
            var fullScreenDiv = document.createElement("div");
            var fullScreenImg = document.createElement("img");
            var closeButton = document.createElement("button");

            closeButton.innerHTML = "Close";
            fullScreenDiv.classList.add("fullScreen");
            closeButton.classList.add("close");
            fullScreenImg.setAttribute("src", source);

            fullScreenDiv.appendChild(fullScreenImg);
            fullScreenDiv.appendChild(closeButton);

            closeButton.addEventListener("click", function () {
                body.removeChild(fullScreenDiv);
            });

            fullScreenImg.addEventListener("click", function () {
                body.removeChild(fullScreenDiv);
            }); // po zmniejszeniu okna niewidoczny button close, dodana funkcja do img

            body.appendChild(fullScreenDiv);
        });
    }


});

