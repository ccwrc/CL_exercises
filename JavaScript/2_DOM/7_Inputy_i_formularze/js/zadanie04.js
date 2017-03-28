/* Zadanie 4
 Na stronie znajduje się select i trzy obrazki. Każdy z obrazków jest przypisany 
 do jednego z wyborów w selekcie. Napisz kod javaScript w taki sposób, żeby widoczny
 był tylko ten obrazek, który został wybrany.  */

document.addEventListener("DOMContentLoaded", function () {

    var selectButton = document.querySelector("button.btn-primary");

    var images = document.querySelectorAll("img");
    var imgOsx = images[0];
    var imgUbuntu = images[1];
    var imgWindows = images[2];
    imgOsx.style.display = "none";
    imgUbuntu.style.display = "none";
    imgWindows.style.display = "none";

    var options = document.querySelectorAll("option");
    var optionWindows = options[0];
    var optionOsx = options[1];
    var optionUbuntu = options[2];

    selectButton.addEventListener("click", function (e) {
        if (optionWindows.selected) {
            imgWindows.style.display = "";
            imgOsx.style.display = "none";
            imgUbuntu.style.display = "none";
        }
        if (optionOsx.selected) {
            imgOsx.style.display = "";
            imgUbuntu.style.display = "none";
            imgWindows.style.display = "none";
        }
        if (optionUbuntu.selected) {
            imgUbuntu.style.display = "";
            imgOsx.style.display = "none";
            imgWindows.style.display = "none";
        }
        e.preventDefault();
    });


});