
/* Napisz listę zadań do zrobienia. Strona ma spełniać następujące założenia:
 
 2.Po naciśnięciu na guzik Complete treść zadania ma się zmienić na kolor czerwony 
 (jeżeli zadanie jest zrobione). Po ponownym naciśnieciu zadanie wraca do koloru 
 domyślnego (czyli oznaczającego zadanie niezrobione).
 3.Po naciśnieciu guzika Delete zadanie ma zniknąć z listy. - powiedzmy dziala
 4.Po naciśnięciu guzika Remove finished tasks wszystkie zrobione zadania mają zniknąć z listy.
 5.Zadanie może być dodane tylko gdy jego treść ma więcej niż pięć, a mniej niż sto znaków.
 7.Ponad listą ma się znajdować licznik pokazujący, ile zadań zostało nam do zrobienia.
 
 Dodaj do strony drugi input, w którym będzie można wpisać priorytet zadania (liczba całkowita od 
 1 do 10). Podczas dodawania zadania musi być ono dodane w odpowiednie miejsce na liście 
 (zadania z priorytetem 10 na samej górze, zadania z priorytetem 0 na samym dole listy). */

document.addEventListener("DOMContentLoaded", function () {

    var addButton = document.querySelector("#addTaskButton");
    var taskInput = document.querySelector("#taskInput");
    var counter = document.querySelector("#counter");
    var tasklist = document.querySelector("#taskList");
    var removeTaskButton = document.querySelector("#removeFinishedTasksButton");

    addButton.addEventListener("click", function () {
        var taskText = taskInput.value;
        taskInput.value = "";
        if (taskText.length > 0 && taskText.length < 100) {
            var newTaskLi = document.createElement("li");
            var newH3 = document.createElement("h3");
            var deleteButton = document.createElement("button");
            var completeButton = document.createElement("button");
            deleteButton.classList.add("delete");
            deleteButton.innerText = "delete";
            completeButton.classList.add("complete");
            completeButton.innerText = "complete";
            newH3.innerText = taskText;

            newTaskLi.appendChild(newH3);
            newTaskLi.appendChild(deleteButton);
            newTaskLi.appendChild(completeButton);

            taskList.appendChild(newTaskLi);

            var completeButtons = document.querySelectorAll(".complete");
            for (var i = 0; i < completeButtons.length; i++) {
                completeButtons[i].addEventListener("click", function (e) {
                    e.preventDefault();
                    this.parentNode.classList.toggle("done");
                });
            }
            var deleteButtons = document.querySelectorAll(".delete");
            for (var i = 0; i < deleteButtons.length; i++) {
                deleteButtons[i].addEventListener("click", function (e) {
//                    e.preventDefault();
//                    console.log("delete");
                    this.parentNode.parentNode.removeChild(this.parentNode);
                });
            }
        }

        //tu dopisac obsluge countera

    });



});









