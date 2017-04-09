
document.addEventListener("DOMContentLoaded", function () {

    var addButton = document.querySelector("#addTaskButton");
    var taskInput = document.querySelector("#taskInput");
    var taskPriority = document.querySelector("#taskPriority");
    var counter = document.querySelector("#counter");
    counter.innerText = 0;
    var tasklist = document.querySelector("#taskList");
    var removeTaskButton = document.querySelector("#removeFinishedTasksButton");

    addButton.addEventListener("click", function () {
        var taskText = taskInput.value;
        var priority = taskPriority.value;
        taskInput.value = "";
        taskPriority.value = "";

        if (taskText.length > 5 && taskText.length < 100 && (priority == 0 || priority == 1)) {
            var newTaskLi = document.createElement("li");
            var newH3 = document.createElement("h3");
            var deleteButton = document.createElement("button");
            var completeButton = document.createElement("button");
            deleteButton.classList.add("delete");
            deleteButton.innerText = "delete";
            completeButton.classList.add("complete");
            completeButton.innerText = "complete";
            newH3.innerText = taskText;

            deleteButton.addEventListener("click", function () {
                taskList.removeChild(this.parentNode);
            });
            completeButton.addEventListener("click", function () {
                this.parentNode.classList.toggle("done");
            });

            newTaskLi.appendChild(newH3);
            newTaskLi.appendChild(deleteButton);
            newTaskLi.appendChild(completeButton);

            if (priority == 0) {
                taskList.appendChild(newTaskLi);
            } else {
                taskList.insertBefore(newTaskLi, taskList.firstChild);
            }
        }

    });

    document.querySelector("body").addEventListener("click", function () {
        var allDoneTasks = document.querySelectorAll(".done");
        var allH3 = document.querySelectorAll("h3");
        var count = allH3.length - allDoneTasks.length;
        counter.innerText = count;
    });

    removeTaskButton.addEventListener("click", function () {
        var tasksToDelete = document.querySelectorAll(".done");
        for (var i = 0; i < tasksToDelete.length; i++) {
            taskList.removeChild(tasksToDelete[i]);
        }
    });


});









