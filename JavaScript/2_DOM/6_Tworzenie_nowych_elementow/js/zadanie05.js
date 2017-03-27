/* Zadanie 5
 Na stronie znajduje się tabela podobna do tej z zadania 1. Tym razem przy każdym 
 zamówieniu znajduje się dodatkowo guzik, który służy do usuwania tego zamówienia.
 Dopisz do niego odpowiedni event, który spowoduje, że dane zamówienie zniknie z
 tablicy. Spróbuj zrobić to w taki sposób, żeby wszystkie guziki korzystały z tego
 samego eventu (użyj this).  */

document.addEventListener("DOMContentLoaded", function () {

    var deleteButtons = document.querySelectorAll("a.deleteBtn");

    for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener("click", function () {
            var parent = this.parentElement.parentElement;
            var childrens = parent.children;
            
            for (var j = 0; j < childrens.length; i++) {
                parent.removeChild(childrens[j]);
            }
        });
    }


});