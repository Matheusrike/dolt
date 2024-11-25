/* ----------------------- Funções usadas para grupos ↓ ----------------------- */

function setActive(group_id) {

    // Busca no DOM todos os elementos com a classe group
    const groups = document.querySelectorAll('.group');

    // Percorre todos os elementos com a classe group
    groups.forEach(group => {
        // Para cada Elemento com a classe group, remove a classe active
        group.classList.remove('active');
        //Cria uma constante que recebe a div com a classe group-options que está dentro do group
        const group_options = group.querySelector('.group-options');
        //Adiciona a propriedade style a div group-options com o valor display: none
        group_options.setAttribute('style', 'display: none;');

        // Se o id do group for igual ao group_id passado como argumento
        if (group.id == "group-" + group_id) {

            // Adiciona a classe active e remove a propriedade style da div group-options
            group.classList.add('active');
            group_options.removeAttribute('style', 'display: none;');
        }
    })
}


function pullTasks(group_id) {
    //Busca o array de tarefas do grupo selecionado com base no user_data do usuário.
    const array_tasks = user_data.tasks_groups.find(group => group.group_id === group_id)?.tasks;

    //Limpa a lista de tarefas antes de carregar outras
    const tasks_list = document.getElementById('tasks-list');
    tasks_list.innerHTML = '';
    
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
                <button id="edit" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="editTask(${task.task_id})">
                    <span class="material-symbols-rounded">edit</span>
                </button>
                <button id="delete" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="deleteTask(${task.task_id})">
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
    })

    //Recarrega o dom para aplicar as classes do material design lite
    componentHandler.upgradeDom();
}
/* ----------------------- Funções usadas para tarefas ↓ ---------------------- */

