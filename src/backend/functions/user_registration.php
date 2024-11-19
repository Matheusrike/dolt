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
function register_user($username, $email, $password)
{
    $user_id = generate_user_id();
    $user_username = $username;
    $user_email = $email;
    $user_password = $password;

    $data = json_decode(file_get_contents('../data/users_data.json'), true);

    $data['users'][] = [
        'user_id' => $user_id,
        'username' => $user_username,
        'user_email' => $user_email,
        'user_password' => $user_password
    ];

    file_put_contents('../data/users_data.json', json_encode($data));
}

/* ----------------------- Teste de inserção de dados ----------------------- */
register_user('Jorginho', 'Jorginho@email.com', 'Coxinha_123');
$users = json_decode(file_get_contents('../data/users_data.json'), true);
print '<pre>';
print_r($users);
print '</pre>';
