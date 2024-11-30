function logout() {
    const url = '/backend/logout.php'
    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.response == 200) {
                user_data = null;
                location.replace('/auth/pages/sign_in.php');
                console.log(`Success: A sessão foi encerrada com sucesso.`);
            } else {
                alert(`Error: não foi possível encerrar a sessão. ${data}`);
            }
        })
}