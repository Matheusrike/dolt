<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fetch_data = json_decode(file_get_contents('php://input'), true);
    $JSON_path = './data/users_data.json';
    $users_data = json_decode(file_get_contents($JSON_path), true);

    foreach ($users_data['users'] as &$user) {
        if ($user['user_id'] === $_SESSION['user_id']) {
            foreach ($user['tasks_groups'] as $i => &$group) {
                if ($group['group_id'] == $fetch_data['group_id']){
                    unset($user['tasks_groups'][$i]);
                    $_SESSION['user_data'] = $user;
                }
            }
        }
    }

    file_put_contents($JSON_path, json_encode($users_data, JSON_PRETTY_PRINT));

    echo json_encode([
        'response' => 200,
        'details' => 'Success: Grupo deletado com sucesso.',
        'updated_data' => $_SESSION['user_data']
    ]);

} else {
    echo json_encode([
        'response' => 405,
        'details' => 'Error: O método utilizado não é permitido'
    ]);
}
