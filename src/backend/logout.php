<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    session_unset();
    session_destroy();
    echo json_encode([
        'response' => 200,
        'details' => 'Success: A sessão foi encerrada com sucesso'
    ]);
} else {
    echo json_encode([
        'response' => 405,
        'details' => 'Error: O método utilizado não é permitido'
    ]);
}