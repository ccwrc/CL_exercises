
document.addEventListener("DOMContentLoaded", function () {

    var tooltip = document.querySelectorAll(".tooltip");

    for (var i = 0; i < tooltip.length; i++) {

        tooltip[i].addEventListener("mouseover", function () {
            console.log("ovwer");
        });

        tooltip[i].addEventListener("mouseout", function () {
            console.log("out");
        });
    }


});

/*
 <span class="tooltipText">Text tooltipa</span>
 */
