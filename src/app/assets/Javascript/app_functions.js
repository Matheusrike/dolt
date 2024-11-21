function editTask(task_id) {

    var taskNameElement = document.getElementById('task-name-' + task_id);
    var currentTaskName = taskNameElement.textContent;

    var inputField = document.createElement('input');
    inputField.type = 'text';
    inputField.value = currentTaskName;
    inputField.id = 'input-task-name-' + task_id;

    taskNameElement.parentNode.replaceChild(inputField, taskNameElement);

    inputField.addEventListener('blur', function() {
        var updatedTaskName = inputField.value;

        var updatedTaskNameElement = document.createElement('p');
        updatedTaskNameElement.id = 'task-name-' + task_id;
        updatedTaskNameElement.className = 'task-name';
        updatedTaskNameElement.textContent = updatedTaskName;

        inputField.parentNode.replaceChild(updatedTaskNameElement, inputField);
    });
}
