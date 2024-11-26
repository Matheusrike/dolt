<?php
session_start();

$database = json_decode(file_get_contents('../backend/data/users_data.json'), true)['users'];
$_SESSION['user_data'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    $decode_data = json_decode($data, true);

    foreach ($_SESSION['user_data']['tasks_groups'] as $group) {
        if ($decode_data['group_id'] === $group['group_id']) {
            foreach ($group['tasks'] as $task) {
                if ($decode_data['task_id'] === $task['task_id']) {
                    $task['is_checked'] = $decode_data['is_checked'];
                }
            }
        }
    }

    file_put_contents('./data/users_data.json', json_encode($users_data), JSON_PRETTY_PRINT);

    echo json_encode([$decode_data]);
}
