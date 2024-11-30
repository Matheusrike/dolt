/* ---------------------- Funções de CRUD dos grupos ↓ ---------------------- */

//Função para criar um novo grupo na lista do usuário.
function createGroup() {
    const input = document.getElementById('input-group-name');

    input.addEventListener('keyup', () => {
        if (event.key === 'Enter') {
            send_data();
        }
    })

    const add_button = document.getElementById('add-button');
    add_button.addEventListener('click', () => {
        send_data();
    })

    const send_data = () => {
        const group_name = input.value;

        if (group_name == '') {
            input.setCustomValidity('Defina um nome para o grupo');
            input.reportValidity();
            input.addEventListener('keyup', () => {
                input.setCustomValidity('');
            })
            input.focus();
        } else {
            // Envia uma requisição http para o arquivo php create_group.php com o nome do novo grupo
            fetch('/backend/create_group.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset = UTF-8'
                },
                body: JSON.stringify({
                    group_name: group_name
                })
            })
                // Converte a resposta em JSON e depois verifica se ela foi bem sucedida
                .then(response => response.json())
                .then(data => {
                    if (data.response !== 200) {
                        console.error(data);
                    } else {
                        user_data = data.updated_data;
                        renderGroups(user_data);
                        input.value = '';
                    }
                })
        }
    }
}

// Função para renderizar os grupos na sidebar
function renderGroups(user_data) {
    const groups_container = document.getElementById('groups-container');

    groups_container.innerHTML = '';

    const tasks_groups = user_data.tasks_groups;

    if (tasks_groups.length === 0) {
        groups_container.innerHTML = `
        <div class="none-group-container" id="alert">
            <img src="./assets/img/none-group-icon.svg">
            <h1>Nenhuma Lista Encontrada</h1>
            <p>Nenhuma lista de tarefas encontrada. Crie uma para começar.</p>
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
                <button id="edit-button" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="editGroup(${group.group_id})">
                    <span class="material-symbols-rounded">edit</span>
                </button>
                <button id="delete-button" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="deleteGroup(${group.group_id})">
                    <span class="material-symbols-rounded">delete</span>
                </button>
            </div>
        `;

        groups_container.appendChild(group_div);
    })

}

// Função para renomear um grupo
function editGroup(group_id) {
    const group_infos = document.getElementById(`group-${group_id}`);
    group_infos.classList.add('editing');
    const current_name = group_infos.querySelector('p').innerText;

    group_infos.innerHTML = `
        <div class="group-infos">
            <div class="input-container">
                <input id="rename-group" class="input" name="rename-group" type="text" required minlength="1" value="${current_name}">
                <label for="rename-group">Novo nome</label>
            </div>
        </div>
            <div class="group-options">
                <button id = "save-button" class="rounded-cta-button mdl-js-button mdl-js-ripple-effect"">
                    <span class="material-symbols-rounded">save</span>
                </button>
            </div>
    `;

    const input = document.getElementById('rename-group');
    input.focus();
    input.addEventListener('keyup', () => {
        if (event.key === 'Enter') {
            send_data();
        }
    })

    const save_button = document.getElementById('save-button');
    save_button.addEventListener('click', () => {
        send_data();
    })

    const send_data = () => {
        if (input.value == '') {
            input.setCustomValidity('Defina um nome para o grupo');
            input.reportValidity();
            input.addEventListener('keyup', () => {
                input.setCustomValidity('');
            })
            input.focus();
        } else {
            fetch('/backend/update_group.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset = UTF-8'
                },
                body: JSON.stringify({
                    group_id: group_id,
                    group_name: input.value
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.response === 200) {
                        user_data = data.updated_data;
                        renderGroups(user_data);
                        setActive(group_id)
                    } else {
                        console.error(data);
                    }
                })
        }
    }

}

// Função para deletar um grupo da lista do usuário
function deleteGroup(group_id) {
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
        showClass: {
            popup: `
            animate__animated
            animate__fadeInRight
            animate__faster
            `
        },
        hideClass: {
            popup: `
            animate__animated
            animate__fadeOutRight
            animate__faster
            `
        }
    });

    Swal.fire({
        title: "Você tem certeza?",
        text: "Essa lista será deletada permanentemente.",
        icon: "warning",
        iconColor: "var(--Warning)",
        confirmButtonText: "Confirmar exclusão",
        confirmButtonColor: "var(--Delete)",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "var(--Dark-Gray)",
        customClass: {
            title: "swal-title",
        }
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('/backend/delete_group.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset = UTF-8'
                },
                body: JSON.stringify({
                    group_id: group_id
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.response === 200) {
                        user_data = data.updated_data;
                        clearMain();
                        renderGroups(user_data);
                        Toast.fire({
                            icon: 'success',
                            text: 'A lista foi deletada com sucesso.'
                        })
                    }
                })
        }
    })
}
