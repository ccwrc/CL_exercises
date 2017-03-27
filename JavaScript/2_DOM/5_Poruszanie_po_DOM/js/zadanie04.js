/* Zadanie 4
Znajdź i zapisz do zmiennych następujące elementy:

    1. Element o klasie first -> jego pierwsze dziecko -> jego trzecie dziecko.
    2. Element o id second -> jego rodzic -> jego czwarte dziecko.
    3. Element o atrybucie data-ex nastawionym na wartość third -> jego dziadek -> jego 
    ostatnie dziecko -> jego pierwsze dziecko -> jego środkowe dziecko 
    (żeby otrzymać środkowy element, podziel liczbę dzieci przez dwa i zaokrąglij w górę).

    4. Div o klasie forth -> jego rodzic -> jego pierwsze dziecko o tagu article -> jego drugie 
    dziecko o tagu <p>.

Wszystkie te elementy mają atrybut data-answer nastawiony na numer zadania, dla którego są
 odpowiedzią. Sprawdź przez wyświetlenie w konsoli wartość tego atrybutu. 
 Dzięki temu będziesz wiedział, czy dane polecenie wykonałeś prawidłowo. */

document.addEventListener("DOMContentLoaded", function() {
    
    var ex1 = document.querySelector(".first").firstElementChild.children[2];
    console.log(ex1.dataset.answer);
    
    var ex2 = document.querySelector("#second").parentElement.children[3];
    console.log(ex2.dataset.answer);
    
    var ex3array = document.querySelector("[data-ex=third]").parentElement.parentElement.lastElementChild.firstElementChild.children;
    var ex3 = ex3array[Math.ceil((ex3array.length-1)/2)];
    console.log(ex3.dataset.answer);
    
    var ex4 = document.querySelector("div.forth").parentElement.querySelector("article").querySelectorAll("p")[1];
    console.log(ex4.dataset.answer);
    
});