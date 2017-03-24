
document.addEventListener("DOMContentLoaded", function () {
    var homeElement = document.getElementById("home");
    var childElements = document.querySelector(".oferts").children;
    var banner = document.querySelector(".ban");
    var blocks = document.querySelectorAll(".block");
    var links = document.querySelector(".links").children;

    /* Poniżej napisz kod rozwiązujący zadania */

    /* Zadanie 1
     W pliku js dopisz kod, który zamieni miejscami klasę i id dla elementu znajdującego
     się w zmiennej homeElement */

    var homeElementId = homeElement.getAttribute("id");
    var homeElementClass = homeElement.getAttribute("class");

    homeElement.setAttribute("class", homeElementId);
    homeElement.setAttribute("id", homeElementClass);

    /* Zadanie 2 
     Przeanalizuj kod HTML i JavaScript tego zadania. Wypisz w konsoli wszystkie wcześniej 
     przygotowane zmienne i ich typy. W przypadku tablic przeiteruj (używając np. pętli 
     for), wypisując wartość i typ dla każdego elementu, który znajduje się w tablicy. */

//    function showElement(element) {
//        if (element.length > 0) {
//            for (var i = 0; i < element.length; i++) {
//                console.log(element[i].tagName);
//                console.log(element[i]);
//            }
//        } else {
//            console.log(element.tagName);
//            console.log(element);
//        }
//    }
//    showElement(homeElement);
//    showElement(childElements);
//    showElement(banner);
//    showElement(blocks);
//    showElement(links);

    /* Zadanie 3
     Wypisz w konsoli wartości innerHTML i outerHTML dla elementów zmiennej blocks. 
     Napisz w komentarzu, czym się od siebie różnią. Nastaw wartość innerHTML na 
     "Nowa wartość diva o klasie blocks". Przeanalizuj, jak zmienił się kod HTML 
     strony. */

    for (var i = 0; i < blocks.length; i++) {
        // po przypisaniu stary kod html zostal zastapiony stringiem
        blocks[i].innerHTML = "Nowa wartość diva o klasie blocks";
        console.log(blocks[i].innerHTML); // tylko wew. html
        console.log(blocks[i].outerHTML); // calosc z zewnetrznym html
    }

});
