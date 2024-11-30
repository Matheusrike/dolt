/* ---------------------- Funções de CRUD dos grupos ↓ ---------------------- */

function createGroup() {

    //Pega o input e seu valor e define uma constantes
    const input = document.getElementById('input-group-name')
    const new_group_name = input.value;

    //Verifica se o input de nome do grupo foi preenchido
    if (new_group_name == '') {

        // Mostra uma mensagem de erro e foca no input e remove a mensagem caso seja digitado algo
        input.setCustomValidity('Defina um nome para o grupo');
        input.reportValidity();
        input.addEventListener('keypress', () => {
            input.setCustomValidity('');
        })
        input.focus();

    } else {

        // Envia uma requisição http para o arquivo php create_group.php com o nome do novo grupo
        const URL = '/backend/create_group.php';
        fetch(URL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json; charset = UTF-8'
            },
            body: JSON.stringify({
                group_name: new_group_name
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

function editGroup(group_id) {
    
}

function deleteGroup(group_id) {
}
