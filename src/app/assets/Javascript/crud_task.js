/* --------------------------- CRUD das tarefas ↓ --------------------------- */

function createTask(group_id) {
    const input = document.getElementById(`new-task-${group_id}`);
    const input_value = input.value;

    if (input_value == "") {
        input.setCustomValidity('Defina um nome para a tarefa');
        input.reportValidity();
        input.addEventListener('keyup', () => {
            input.setCustomValidity('');
        })
        input.focus();
    } else {
        fetch('/backend/create_task.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json, charset=UTF-8',
            },
            body: JSON.stringify({
                group_id: group_id,
                task_name: input_value
            })
        })
            .then(response => response.json())
            .then(data => {
                if (data.response === 200) {
                    user_data = data.updated_data;
                    renderTasks(group_id);
                } else {
                    console.error(data);
                }
            })
    }
}

function renderTasks(group_id) {
    //Busca o array de tarefas do grupo selecionado com base no user_data do usuário.
    const array_tasks = user_data.tasks_groups.find(group => group.group_id === group_id)?.tasks;

    // Cria o formulário de criação de tarefa e o container de tarefas
    mainBasicStructure(group_id);

    // Verifica se o array de tarefas do grupo selecionado está vazio
    if (array_tasks.length === 0) {
        //Exibe um alerta de que o grupo não possui nenhuma tarefa
        const tasks_container = document.getElementById("main-container");
        tasks_container.innerHTML = `
            <div class="tasks-alert">
                <img src="./assets/img/none-task-icon.svg">
                <h1>Nenhuma Tarefa encontrada</h1>
                <p>Você não possui nenhuma tarefa criada considere criar uma para começar</p>
            </div>
        `;
    } else {
        //Limpa o main-container e cria a lista dentro dele
        const tasks_container = document.getElementById("main-container");
        tasks_container.innerHTML = '';

        const tasks_list = document.createElement('ul');
        tasks_list.id = 'tasks-list-' + group_id;
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
            <p class="task-name">${task.task_name}</p>
            <div class="actions-container">
                <button class="edit-button rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick = "editTask(${task.task_id}, ${group_id})">
                    <span class="material-symbols-rounded">edit</span>
                </button>
                <button class="delete-button rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick = "deleteTask(${task.task_id}, ${group_id})">
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
            checkboxChange(group_id, task.task_id, checkbox.id);
        })
    }
    //Recarrega o dom para aplicar as classes do material design lite no conteúdo gerado
    componentHandler.upgradeDom();
}

function editTask(task_id, group_id) {
    const task_li = document.getElementById(`task-${task_id}`);
    const current_name = task_li.querySelector('p').innerText;

    task_li.innerHTML = `
        <div class="actions-container">
            <button id = "save-button" class="rounded-cta-button mdl-js-button mdl-js-ripple-effect"">
                <span class="material-symbols-rounded">save</span>
            </button>
        </div>
        <div class="input-container">
            <input id="rename-task" class="input" name="rename-task" type="text" required minlength="1" value="${current_name}">
            <label id='rename-task-label' for="rename-task">Novo nome</label>
        </div>
    `;

    const input = document.getElementById('rename-task');
    input.focus();
    input.addEventListener('keyup', () => {
        if (event.key === 'Enter') {
            send_data();
        }
    })
    input.addEventListener('keyup', () => {
        if (event.key === 'Escape') {
            renderTasks(group_id);
        }
    })

    const submit = document.getElementById('save-button');
    submit.addEventListener('click', () => {
        send_data();
    })

    const send_data = () => {
        if (input.value == '') {
            input.setCustomValidity('Defina um nome para a tarefa');
            input.reportValidity();
            input.addEventListener('keyup', () => {
                input.setCustomValidity('');
            })
            input.focus();
        } else {
            fetch('/backend/update_task.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset = UTF-8'
                },
                body: JSON.stringify({
                    group_id: group_id,
                    task_id: task_id,
                    task_name: input.value
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.response == 200) {
                    user_data = data.updated_data;
                    renderTasks(group_id);
                } else {
                    console.error(data);
                }
            })
        }
    }
}

function deleteTask(task_id, group_id) {
    fetch('/backend/delete_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json; charset = UTF-8'
        },
        body: JSON.stringify({
            group_id: group_id,
            task_id: task_id
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.response == 200) {
            user_data = data.updated_data;
            renderTasks(group_id);
        } else {
            console.error(data);
        }
    })
}