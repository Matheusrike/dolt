//* Carrega os grupos do user_data dentro da div groups-container

const groups_container = document.getElementById('groups-container');

const tasks_groups = user_data.tasks_groups;

if (tasks_groups.length === 0) {

    groups_container.innerHTML = `
        <div class="none-group-container" id="alert">
            <img src="./assets/img/none-group-icon.svg">
            <h1>Nenhum Grupo Existente</h1>
            <p>Não foi encontrado nenhum grupo. <br>Considere criar um para começar</p>
        </div>
    `;
    
}

tasks_groups.forEach(group => {
    const group_div = document.createElement('div');
    group_div.id = `group-${group.group_id}`;
    group_div.className = 'group';

    group_div.addEventListener('click', () => {
        setActive(group.group_id);
        pullTasks(group.group_id);
    })

    group_div.innerHTML = `
            <div class="group-infos">
                <span id="group-icon" class="material-symbols-rounded">format_list_bulleted</span>
                <p>${group.group_name}</p>
            </div>
            <div class="group-options" style="display: none;">
                <button id="edit" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="editGroupName(${group.group_id})">
                    <span class="material-symbols-rounded">edit</span>
                </button>
                <button id="delete" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="deleteGroup(${group.group_id})">
                    <span class="material-symbols-rounded">delete</span>
                </button>
            </div>
        `;

    groups_container.appendChild(group_div);
})


//* Função que define o grupo selecionado como ativo
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

