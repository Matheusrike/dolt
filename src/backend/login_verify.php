<?php
session_start();

//Criar um array de users com base no Objeto Users do JSON users_data
$users = json_decode(file_get_contents('../backend/data/users_data.json'), true)['users'];

//Define uma variável $authenticated para saber se a autenticação foi bem-sucedida
$authenticated = false;

//Percorre o array users tratando cada objeto como $user 
foreach ($users as $user) {

    // Primeiro transforma o input em minusculo e depois compara com o email da base de dados
    if (strtolower($_POST['user_email']) === $user['user_email']) {

        // todo Adicionar o a função password_verify() passando o $_POST como argumento do PHP para verificar se o hash bate com a base de dados.
        // usa a função password_verify() passando o $_POST como argumento do PHP para verificar se a senha está conforme o hash da base de dados
        if ($_POST['user_password'] === $user['user_password']) {

            // Atribui o id do user ao $_SESSION e confirma a autenticação
            $_SESSION['user_id'] = $user['user_id'];
            $authenticated = true;

            // Redireciona o usuário para a página do app e encerra o script
            header('Location: ../app/app.php');
            exit();
        }
    }
}

//todo Tentar fazer com que apareça uma mensagem de erro no formulário de login caso a autenticação falhe
if ($authenticated == false) {
    header('Location: /1TD/Projetos/Dolt/src/auth/pages/sign_in.php');
    exit();
}