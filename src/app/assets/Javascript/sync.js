//* Função que requisita os dados atuais ao servidor e atualiza a variável user_data global
function syncUserData() {
    const url = '/backend/sync_user_data.php';
    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            // user_data = data.current_data;
        })
        .catch(error => console.error(`Error: Erro na sincronização dos dados\n${error}`));
}