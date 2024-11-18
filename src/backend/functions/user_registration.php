<?php


$users = json_decode(file_get_contents('../data/users_data.json'), true);
print_r($users);

function generate_user_id() {
    $max_id = 0;
    foreach ($users as $user) {
        if ($user['id'] > $max_id) {
            $max_id = $user['id'];
        }
    }
    $max_id++;
}

function register_user($username, $email, $password) {
    $user_id = generate_user_id();
    $user_username = $_POST['username'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
}