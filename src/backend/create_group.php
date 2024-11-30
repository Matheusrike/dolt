<?php
session_start();

//Verifica se o método utilizado é POST
if ($_SERVER['REQUEST_METHOD']  === 'POST') {

    //Recebe o nome do novo grupo via JSON e separa os grupos do usuário da sessão em uma variável 
    $new_group_name = json_decode(file_get_contents('php://input'), true);
    $user_groups = $_SESSION['user_data']['tasks_groups'];

    //Busca o conteúdo do arquivo users_data.json e o transforma em uma variável.
    $JSON_path = './data/users_data.json';
    $users_data = json_decode(file_get_contents($JSON_path), true);


    //Gera um id único com base no ultimo id dos grupos do usuário.
    $lastId = 0;
    foreach ($user_groups as &$group) {
        if ($lastId < $group['group_id']) {
            $lastId = $group['group_id'];
            $lastId++;
            //Adiciona o novo grupo ao array
            $user_groups[] = [
                'group_id' => $lastId,
                'group_name' => $new_group_name['group_name'],
                'tasks' => []
            ];
            //Procura o usuário, atualiza o array de grupos e atualiza o $_SESSION 
            foreach ($users_data['users'] as &$user) {
                if ($_SESSION['user_id'] === $user['user_id']) {
                    $user['tasks_groups'] = $user_groups;
                    $_SESSION['user_data'] = $user;
                }
                file_put_contents($JSON_path, json_encode($users_data));
                //Retorna o grupo criado
                echo json_encode([
                    'response' => 200,
                    'details' => 'Grupo adicionado com sucesso',
                    'updated_data' => $_SESSION['user_data']
                ]);
            }
        } else {
            //Retorna um erro dizendo que o método utilizado não é permitido
            echo json_encode([
                'response' => 405,
                'details' => 'Error: O método utilizado não é permitido'
            ]);
        }
    }
}
