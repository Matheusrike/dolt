<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fetch = json_decode(file_get_contents('php://input'), true);
    $users_data = json_decode(file_get_contents('./data/users_data.json'), true);

    foreach ($users_data['users'] as &$user) {
        if ($user['user_id'] === $_SESSION['user_id']) {
            foreach ($user['tasks_groups'] as &$group) {
                if ($group['group_id'] === $fetch['group_id']) {

                    $last_id = 0;
                    foreach ($group['tasks'] as &$task) {
                        if ($last_id < $task['task_id']) {
                            $last_id = $task['task_id'];
                        }
                    }
                    $last_id++;
                    $group['tasks'][] = [
                        "task_id" => $last_id,
                        "task_name" => $fetch['task_name'],
                        "is_checked" => false
                    ];
                    $_SESSION['user_data'] = $user;
                    break;
                }
            }
            break;
        }
    }
    file_put_contents('./data/users_data.json', json_encode($users_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo json_encode([
        'response' => 200,
        'details' => 'Success: Tarefa criada com sucesso.',
        'updated_data' => $_SESSION['user_data']
    ]);

} else {
    echo json_encode([
        'response' => 405,
        'details' => 'Error: O método utilizado não é permitido'
    ]);
}

