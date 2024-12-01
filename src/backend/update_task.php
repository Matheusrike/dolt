<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fetch = json_decode(file_get_contents('php://input'), true);
    $JSON_path = './data/users_data.json';
    $users_data = json_decode(file_get_contents($JSON_path), true);

    foreach ($users_data['users'] as &$user) {
        if ($user['user_id'] === $_SESSION['user_id']) {
            foreach ($user['tasks_groups'] as &$group) {
                if ($group['group_id'] === $fetch['group_id']) {
                    foreach ($group['tasks'] as &$task) {
                        if ($task['task_id'] === $fetch['task_id']) {
                            $task['task_name'] = $fetch['task_name'];
                            $_SESSION['user_data'] = $user;
                            break;
                        }
                    }
                    break;
                }
            }
            break;
        }
    }

    file_put_contents($JSON_path, json_encode($users_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo json_encode([
        'response' => 200,
        'details' => 'Tarefa atualizada com sucesso',
        'updated_data' => $_SESSION['user_data']
    ]);
}else {
    echo json_encode([
        'response' => 405,
        'details' => 'Error: O método utilizado não é permitido'
    ]);
}
