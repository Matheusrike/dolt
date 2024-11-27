<?php

session_start();

$users_data_path = './data/users_data.json';
$users_data = json_decode(file_get_contents($users_data_path), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fetch_data = json_decode(file_get_contents('php://input'), true);
    
    if($users_data === null || !isset($users_data['users'])) {
        echo json_encode([
            'response' => 'Erro',
            'details' => 'O banco de dados está corrompido ou não foi encontrado'
        ]);
        exit;
    }

    foreach ($users_data['users'] as &$user) {
        if ($user['user_id'] === $_SESSION['user_id']) {
            foreach ($user['tasks_groups'] as &$group) {
                if ($group['group_id'] === $fetch_data['group_id']) {
                    foreach ($group['tasks'] as &$task) {
                        if ($task['task_id'] === $fetch_data['task_id']) {
                            $task['is_checked'] = $fetch_data['is_checked'];
                        }
                    }
                }
            }
        }
    }

    file_put_contents($users_data_path, json_encode($users_data));
    
    foreach ($users_data['users'] as &$user) {
        if ($user['user_id'] === $_SESSION['user_id']) {
            $_SESSION['user_data'] = $user;
        }
    }
    
    echo json_encode([
        'response' => 200,
        'details' =>  'O status da tarefa foi alterado com sucesso',
        'updated_data' => $_SESSION['user_data']
    ]);
}