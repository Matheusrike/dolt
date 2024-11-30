/* ------------------- Funções para manipulação de tarefas ------------------ */

// Função que exibe as tarefas do grupo selecionado e cria o formulário de criação de tarefa
function pullTasks(group_id) {
    //Busca o array de tarefas do grupo selecionado com base no user_data do usuário.
    const array_tasks = user_data.tasks_groups.find(group => group.group_id === group_id)?.tasks;

    // Verifica se o array de tarefas do grupo selecionado está vazio
    if (array_tasks.length === 0) {

        //Adiciona o input de criação de tarefa no DOM
        mainBasicStructure(group_id);

        //Exibe um alerta de que o grupo não possui nenhuma tarefa
        const tasks_container = document.getElementById("tasks-container");
        tasks_container.innerHTML = `
            <div class="tasks-alert">
                <img src="./assets/img/none-task-icon.svg">
                <h1>Nenhuma Tarefa encontrada</h1>
                <p>Você não possui nenhuma tarefa criada considere criar uma para começar</p>
            </div>
        `;
    } else {

        //Cria a main com o formulário de criação de tarefa e o container de tarefas
        mainBasicStructure(group_id);

        //Limpa o tasks-container e cria a lista dentro dele
        tasks_container = document.getElementById("tasks-container");
        tasks_container.innerHTML = '';

        const tasks_list = document.createElement('ul');
        tasks_list.id = 'tasks-list';
        tasks_list.className = 'tasks-list demo-list-control mdl-list';

        tasks_container.appendChild(tasks_list);

        // Para cada objeto task dentro do array ele cria um li que vai ser inserido na lista tasks-list da main
        array_tasks.forEach(task => {
            const task_li = document.createElement('li');
            task_li.id = 'task-' + task.task_id;
            task_li.className = 'task';
            task_li.classList.add('mdl-list__item');
            task_li.innerHTML = `
            <span class="mdl-list__item-secondary-action">
                <label id = "label-${task.task_id}" class="checkbox mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-${task.task_id}">
                </label>
            </span>
            <p id="task-name-${task.task_id}" class="task-name">${task.task_name}</p>
            <div class="actions-container">
                <button id="edit-button" class="task-edit rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="editTask(${task.task_id})">
                    <span class="material-symbols-rounded">edit</span>
                </button>
                <button id="delete-button" class="task-delete rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="deleteTask(${task.task_id})">
                    <span class="material-symbols-rounded">delete</span>
                </button>
            </div>
        `;

            // insere o li dentro da ul
            tasks_list.appendChild(task_li);

            // Cria o input checkbox referente a task e verifica se o atributo is checked está true ou false
            const checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.id = 'list-checkbox-' + task.task_id;
            checkbox.className = 'checkbox-input mdl-checkbox__input';
            checkbox.checked = task.is_checked;

            // Adiciona o checkbox dentro da label
            const label = document.getElementById('label-' + task.task_id);
            label.appendChild(checkbox);

            // adiciona o EventListener na checkbox e faz com que ela envie a requisição para o backend quando mudar de status
            handleCheckboxChange(group_id, task.task_id, checkbox.id);
        })

    }

    //Recarrega o dom para aplicar as classes do material design lite no conteúdo gerado
    componentHandler.upgradeDom();
}