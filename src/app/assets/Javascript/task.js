//* Função que carrega as tarefas do grupo selecionado

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
        </div>`;

        //Se o grupo tiver tarefas elas serão carregadas
    }

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
                <button id="edit" class="task-edit rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="editTask(${task.task_id})">
                    <span class="material-symbols-rounded">edit</span>
                </button>
                <button id="delete" class="task-delete rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="deleteTask(${task.task_id})">
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

    //Recarrega o dom para aplicar as classes do material design lite no conteúdo gerado
    componentHandler.upgradeDom();
}

//* Função que adiciona o EventListener nos inputs de checkbox para alterar o status das tarefas
function handleCheckboxChange(groupId, taskId, checkboxId) {

    //Pega a checkbox pelo id passado
    const checkbox = document.getElementById(checkboxId);

    //Adiciona o EventListener na checkbox para que quando houver uma mudança de status
    checkbox.addEventListener('change', function () {

        const url = '/backend/change_task_status.php';

        // Verifica se a checkbox está checada
        if (this.checked) {

            //Se estiver envia uma requisição http para o arquivo php change_task_status.php
            fetch(url, {

                // Define as informações da requisição: método, tipo de conteúdo, charset e o conteúdo em si 
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset=utf-8'
                },

                // transforma os dados de JSON para texto
                body: JSON.stringify({
                    group_id: groupId,
                    task_id: taskId,
                    is_checked: true
                })
            })

                // Quando o change_task_status.php responder, a resposta será convertida de texto para um objeto JSON
                .then(response => response.json())


                .then(data => {
                    user_data = data.updated_data
                    console.log(data)
                })
        } else {
            // Realiza a mesma coisa da condição anterior, mas apenas quando for desmarcado a checkbox
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset=utf-8'
                },
                body: JSON.stringify({
                    group_id: groupId,
                    task_id: taskId,
                    is_checked: false

                })
            })
                .then(response => response.json())
                .then(data => {
                    user_data = data.updated_data
                    console.log(data)
                })
        }
    })
}

//* Função que cria o formulário de criação de tarefa
function mainBasicStructure(group_id) {
    // Cria a div do formulário e adiciona na main
    const main = document.getElementsByTagName('main')[0];
    main.innerHTML = '';

    const form_container = document.createElement('div');
    form_container.className = 'form-container';
    main.appendChild(form_container);

    // Cria o formulário
    const task_create_form = document.createElement('form');
    task_create_form.className = 'task-create-form';
    form_container.appendChild(task_create_form);

    // Cria o botão de submit do formulário
    const submit_button = document.createElement('button');
    submit_button.className = 'rounded-cta-button mdl-js-button mdl-js-ripple-effect';
    submit_button.innerHTML = `<span id="add-icon" class="material-symbols-rounded">add</span>`;
    task_create_form.appendChild(submit_button);

    // Adiciona o EventListener ao botão de submit que evita o comportamento padrão do formulário e chama a função createTask
    submit_button.addEventListener('click', (event) => {
        event.preventDefault();
        createTask(group_id);
    });

    //Adiciona o input no formulário
    const input = document.createElement('div');
    input.className = 'input-container';
    input.innerHTML = `
        <input type="text" id="task-name" class="input" name="task-name" required minlength="1">
        <label for="task-name">Nova tarefa</label>
    `;
    task_create_form.appendChild(input);

    const tasks_container = document.createElement('div');
    tasks_container.id = 'tasks-container';
    tasks_container.className = 'tasks-container';
    tasks_container.innerHTML = `<ul class="tasks-list demo-list-control mdl-list" id="tasks-list"></ul>`;
    main.appendChild(tasks_container);
}