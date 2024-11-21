<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login_teste.php');
    exit();
} else {

    //Acessa o array users que está dentro do arquivo users_data.json
    $users = json_decode(file_get_contents('../backend/data/users_data.json'), true)['users'];

    //Cria um array que contem apenas os dados do usuário da sessão
    $user_data = null;
    foreach ($users as $user) {
        if ($_SESSION['user_id'] === $user['user_id']) {
            $user_data = $user;
            break;
        }
    }

    if (!$user_data) {
        header('Location: ../auth/login_teste.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt - Task Manager</title>

    <!-- Define o favicon do site (ícone ao lado do titulo da página) -->
    <link rel="shortcut icon" href="../global/img/Favicon.ico" type="image/x-icon">

    <!-- Arquivo css que puxa os ícones do google fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Importa a biblioteca Material Design Lite via CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Define os arquivos css aplicados na página -->
    <link rel="stylesheet" href="../global/global.css">
    <link rel="stylesheet" href="./assets/style/style.css">

    <!-- Importa as funções javascript aplicados na página -->
    <script src="./assets/Javascript/app_functions.js"></script>
</head>

<body>

    <nav class="sidebar" id="sidebar">
        <div id="user" class="user-info">
            <span id="user-icon" class="material-symbols-rounded" style="color: var(--Dark-Blue);">account_circle</span>
            <span class="item-description">
                <?php echo $user_data['username']; ?>
            </span>
        </div>
        <!-- Mensagem de alerta para o usuário caso ele ainda não tenha criado nenhum grupo -->
        <div class="none-group-container" id="alert" style="display: none;">
            <img src="./assets/img/noneGroup-icon.svg">
            <p>Você ainda não possui nenhum grupo criado</p>
        </div>

        <!-- Campo com os grupos criados pelo usuário -->
        <div class="groups-container" id="groups">
            <div class="group active" onclick="loadTasks(); setActive();">
                <div class="group-infos">
                    <span id="group-icon" class="material-symbols-rounded">format_list_bulleted</span>
                    <p>$Group_test</p>
                </div>
                <div class="group-options">
                    <button id="edit" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="editGroup()">
                        <span class="material-symbols-rounded">edit</span>
                    </button>
                    <button id="delete" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="deleteGroup()">
                        <span class="material-symbols-rounded">delete</span>
                    </button>
                </div>
            </div>
            <?php
            $users_data = json_decode(file_get_contents('../backend/data/users_data.json'), true);
            $users = $users_data['users'];

            foreach ($users as $user) {
                if ($user['user_id'] == $_SESSION['user_id']) {
                    $task_groups = $user['tasks_groups'];
                    foreach ($task_groups as $task_group) {

                        echo '
                    <div class="group" onclick="setActive(); loadTasks(' . $task_group['group_id'] . ')">
                        <div class="group-infos">
                            <span id="group-icon" class="material-symbols-rounded">format_list_bulleted</span>
                            <p>' . $task_group['group_name'] . '</p>
                        </div>
                    </div>
                ';
                    }
                }
            }
            ?>
        </div>

        <!-- Campo onde o usuário cria um novo grupo -->
        <form action="#" class="group-create-form"> <!--todo Adicionar funcionalidade de criar novo grupo -->
            <div class="input-container">
                <input type="text" id="group-name" class="input" name="group-name" required minlength="1">
                <label for="group-name">Nome do grupo</label>
            </div>

            <button type="submit" class="rounded-cta-button mdl-js-button mdl-js-ripple-effect">
                <span id="add-icon" class="material-symbols-rounded "> add </span>
            </button>
        </form>

        <!-- Campo com o logo da Dolt e o botão de logout -->
        <div class="footer">
            <img src="../global/img/Logo.svg" alt="Dolt.inc" height="32px" class="logo">
            <!--todo Remover height no CSS-->
            <button class="expandable-button mdl-js-button mdl-js-ripple-effect">
                <div class="icon">
                    <span id="logout-icon" class="material-symbols-rounded">logout</span>
                </div>
                <div class="text">Logout</div>
            </button>
        </div>
    </nav>

    <main>

        <header class="search-container">
            <form action="#" class="task-create-form"> <!-- Adicionar funcionalidade de criar nova tarefa -->
                <button type="submit" class="rounded-cta-button mdl-js-button mdl-js-ripple-effect">
                    <span id="add-icon" class="material-symbols-rounded "> add </span>
                </button>
                <div class="input-container">
                    <input type="text" id="task-name" class="input" name="task-name" required minlength="1">
                    <label for="task-name">Nova tarefa</label>
                </div>
            </form>
        </header>

        <div class="tasks-container" id="tasks-container">
            <ul class="tasks-list demo-list-control mdl-list">
                <?php

                $tasks = $task_group['tasks'];
                foreach ($tasks as $task) {
                    echo '
                    <li class="task mdl-list__item">
                        <span class="mdl-list__item-secondary-action">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-' . $task['task_id'] . '">
                                <input type="checkbox" id="list-checkbox-' . $task['task_id'] . '" class="checkbox-input mdl-checkbox__input" />
                            </label>
                        </span>
                        <p id="task-name-' . $task['task_id'] . '" class="task-name">' . $task['task_name'] . '</p>
                        <div class="actions-container">
                            <button id="edit" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="editTask(' . $task['task_id'] . ')">
                                <span class="material-symbols-rounded">edit</span>
                            </button>
                            <button id="delete" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect" onclick="deleteTask(' . $task['task_id'] . ')">
                                <span class="material-symbols-rounded">delete</span>
                            </button>
                        </div>
                    </li>
                    ';
                }
                ?>
            </ul>
        </div>
    </main>
</body>

</html>
</body>

</html>