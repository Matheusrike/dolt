<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fetch_data = json_decode(file_get_contents('php://input'), true);
    $JSON_path = './data/users_data.json';
    $users_data = json_decode(file_get_contents($JSON_path), true);

    foreach ($users_data['users'] as &$user) {
        if ($user['user_id'] == $_SESSION['user_id']) {
            foreach ($user['tasks_groups'] as &$group) {
                if ($group['group_id'] == $fetch_data['group_id']) {
                    foreach ($group['tasks'] as $key => &$task) {
                        if ($task['task_id'] == $fetch_data['task_id']) {
                            unset($group['tasks'][$key]);
                            $group['tasks'] = array_values($group['tasks']);
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
        'details' => 'Success: Tarefa deletada com sucesso.',
        'updated_data' => $_SESSION['user_data']
    ]);

} else {
    echo json_encode([
        'response' => 405,
        'details' => 'Error: O método utilizado não é permitido'
    ]);
}
