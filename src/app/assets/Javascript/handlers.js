function clearMain() {
    const main = document.getElementsByTagName('main')[0];
    main.innerHTML = `
        <div class="any-group-selected">
            <img src="./assets/img/select-list-icon.svg" alt="O grupo que vocês procurava nao foi encontrado. Selecione uma das lista na barra lateral ou crie uma lista nova.">
            <h1>Nenhuma lista selecionada</h1>
            <p>Selecione uma das listas na barra lateral ou crie uma lista nova.</p>
        </div>
    `;
}

// Função que adiciona o EventListener nos inputs de checkbox para alterar o status das tarefas
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
                })
        }
    })
}

// Função que cria o formulário de criação de tarefa e o container de tarefas
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

// Função que define o grupo selecionado como ativo
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
