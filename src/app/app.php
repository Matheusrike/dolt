<?php
session_start();

// Verifica de o id da sessão foi definido, se não expulsa o usuário
if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/pages/sign_in.php');
    exit();
} else {

    //Acessa o array users que está dentro do arquivo users_data.json
    $JSON_file_array = json_decode(file_get_contents('../backend/data/users_data.json'), true);

    $users = $JSON_file_array['users'];

    //Cria um array que contem apenas os dados do usuário da sessão
    $_SESSION['user_data'] = null;
    foreach ($users as $user) {
        if ($_SESSION['user_id'] === $user['user_id']) {
            $_SESSION['user_data'] = $user;
            break;
        }
    }

    //Verifica se o user data é null, se for expulsa o usuário.
    if (!$_SESSION['user_data']) {
        header('Location: ../auth/sign_in.php');
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

    <!-- Importa as funções javascript aplicados na página e torna o user_data global -->
    <script>
        var user_data = <?php echo json_encode($_SESSION['user_data']); ?>;
        document.addEventListener ('DOMContentLoaded', () => {
            renderGroups(user_data);
        })
    </script>
    <script defer src="./assets/Javascript/load_group.js"></script>
    <script defer src="./assets/Javascript/logout.js"></script>
    <script defer src="./assets/Javascript/crud_group.js"></script>
    <script defer src="./assets/Javascript/task.js"></script>
</head>

<body>
    <nav class="sidebar" id="sidebar">
        <div id="user" class="user-info">
            <span id="user-icon" class="material-symbols-rounded" style="color: var(--Dark-Blue);">account_circle</span>
            <span class="username">
                <?php echo $_SESSION['user_data']['username']; ?>
            </span>
        </div>

        <!-- Campo com os grupos criados pelo usuário -->
        <div class="groups-container" id="groups-container"></div>

        <!--Campo onde o usuário cria um novo grupo -->
        <div class="group-create-form">
            <div class="input-container">
                <input type="text" id="input-group-name" class="input" name="group-name" required minlength="1">
                <label for="group-name">Nome do grupo</label>
            </div>
            <button type="submit" class="rounded-cta-button mdl-js-button mdl-js-ripple-effect" onclick="createGroup()">
                <span id="add-icon" class="material-symbols-rounded "> add </span>
            </button>
        </div>

        <!-- Campo com o logo da Dolt e o botão de logout -->
        <div class="footer">
            <img src="../global/img/Logo.svg" alt="Dolt.inc" height="32px" class="logo">
            <button id="logout-button" class="expandable-button mdl-js-button mdl-js-ripple-effect" onclick="logout()">
                <div class="icon">
                    <span id="logout-icon" class="material-symbols-rounded">logout</span>
                </div>
                <div class="text">Logout</div>
            </button>
        </div>
    </nav>

    <main>
        <div class="any-group-selected">
            <img src="./assets/img/select-list-icon.svg" alt="O grupo que vocês procurava nao foi encontrado. Selecione uma das lista na barra lateral ou crie uma lista nova.">
            <h1>Grupo não encontrado</h1>
            <p>O grupo que vocês procurava nao foi encontrado.<br>Selecione uma das lista na barra lateral ou crie uma lista nova.</p>
        </div>
    </main>
</body>

</html>
</body>

</html>