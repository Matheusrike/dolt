function editTask(task_id) {

    var taskNameElement = document.getElementById('task-name-' + task_id);
    var currentTaskName = taskNameElement.textContent;

    var inputContainer = document.createElement('div');
    inputContainer.className = 'input-container';
    inputContainer.innerHTML = '<input class="input" id="editing-input" type="text" name="editing-input" required minlength="1" value =' + currentTaskName + ' ><label for= "group-name" style = "top: 1.2rem">Novo nome</label>';


    taskNameElement.parentNode.replaceChild(inputContainer, taskNameElement);

    var inputField = document.getElementById('editing-input');
    inputField.addEventListener('keypress', function (key) {
        if (key.key === "Enter") {
            var updatedTaskName = inputField.value;

            var updatedTaskNameElement = document.createElement('p');
            updatedTaskNameElement.id = 'task-name-' + task_id;
            updatedTaskNameElement.className = 'task-name';
            updatedTaskNameElement.textContent = updatedTaskName;

            inputContainer.parentNode.replaceChild(updatedTaskNameElement, inputContainer);
        }
    });
}
