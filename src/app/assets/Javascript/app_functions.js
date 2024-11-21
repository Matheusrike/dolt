function loadTasks(group_id) {
    const group_id = document.getElementById(`group-${group_id}`);
    group_id.classList.add('active');

    const task_container = document.getElementById('tasks-container');
    task_container.innerHTML = '<p>Loading tasks...</p>';
}