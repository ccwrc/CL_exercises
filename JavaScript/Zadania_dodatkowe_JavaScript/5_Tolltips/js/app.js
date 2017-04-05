
document.addEventListener("DOMContentLoaded", function () {

    var tooltip = document.querySelectorAll(".tooltip");

    for (var i = 0; i < tooltip.length; i++) {

        tooltip[i].addEventListener("mouseover", function () {
            var newSpan = document.createElement("span");
            newSpan.classList.add("tooltipText");
            newSpan.innerText = this.dataset.text;
            this.appendChild(newSpan);
        });

        tooltip[i].addEventListener("mouseout", function () {
            // this.removeChild(this.childNodes[1]);
            this.removeChild(this.querySelector(".tooltipText"));
        });
    }


});

