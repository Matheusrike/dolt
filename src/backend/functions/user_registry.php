<?php

/* ------------ Função que gera um ID único para um novo usuário ------------ */
function generate_user_id()
{
    // Pega o arquivo JSON e transforma em um array com o mesmo nome do arquivo;
    $users_data = json_decode(file_get_contents('../data/users_data.json'), true);

    //Acessa o array users que está dentro do arquivo users_data.json 
    $users = $users_data['users'];

    //Define uma variável max_id e atribui o valor 0
    $max_id = 0;

    //Acessa o array users e denomina cada objeto como $user
    foreach ($users as $user) {

        // Verifica se o valor da chave "user_id" do objeto $user é nulo ou maior ou igual ao $max_id.
        if ($user['user_id'] == null || $user['user_id'] >= $max_id) {

            // Até que a condição seja verdadeira, o $max_id recebe o valor da chave "user_id" do objeto $user da vez.
            $max_id = $user['user_id'];
        }
    }

    //Após isso o $max_id vai ser igual ao id do ultimo objeto $user do array users

    //Então a função retorna o valor do $max_id + 1, para ser gerado o proximo id do usuário;
    return $max_id + 1;
}

/* ------- Função que cria um novo usuário no arquivo users_data.json ------- */
function register_user()
{
    //Verifica se o arquivo users_data.json não existe, se não existir cria um novo arquivo
    if (!file_exists('../data/users_data.json')) {
        file_put_contents('../data/users_data.json', json_encode(['users' => []]));
    }

    //Pega o arquivo JSON e transforma em um array com o mesmo nome do arquivo;
    $users_data = json_decode(file_get_contents('../data/users_data.json'), true);

    //Cria dentro do array users na ultima posição, um novo registro de usuário com os dados vindos do formulário
    $users_data['users'][] = [
        'user_id' => generate_user_id(),
        'username' => $_POST['username'],
        'user_email' => $_POST['user_email'],
        'user_password' => $_POST['user_password'],
        'tasks-groups' => []
    ];

    //Reescreve o arquivo users_data.json com o novo array
    file_put_contents('../data/users_data.json', json_encode($users_data), JSON_PRETTY_PRINT);
}