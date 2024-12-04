<?php
session_start();

$_SESSION['user_id'] = 0;

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

    <!-- Importa a biblioteca SweetAlert2 e animate.css via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Define os arquivos css aplicados na página -->
    <link rel="stylesheet" href="../global/global.css">
    <link rel="stylesheet" href="./assets/style/style.css">

    <!-- Importa as funções javascript aplicados na página e torna o user_data global e chama as funções de inicialização -->
    <script defer src="./assets/Javascript/handlers.js"></script>
    <script defer src="./assets/Javascript/crud_group.js"></script>
    <script defer src="./assets/Javascript/logout.js"></script>
    <script defer src="./assets/Javascript/crud_task.js"></script>
    <script>
        var user_data = <?php echo json_encode($_SESSION['user_data']); ?>;
        document.addEventListener('DOMContentLoaded', () => {
            renderGroups(user_data);
            clearMain();
            createGroup();
        })
    </script>
</head>

<body>
    <nav class="sidebar" id="sidebar">
        <!-- Campo com os grupos criados pelo usuário -->
        <div class="groups-container" id="groups-container"></div>

        <!--Campo onde o usuário cria um novo grupo -->
        <div class="group-create-form">
            <div class="input-container">
                <input type="text" id="input-group-name" class="input" name="group-name" required minlength="1">
                <label for="group-name">Nome da lista</label>
            </div>
            <button id="add-button" type="submit" class="rounded-cta-button mdl-js-button mdl-js-ripple-effect">
                <span id="add-icon" class="material-symbols-rounded "> add </span>
            </button>
        </div>

        <!-- Campo com o logo da Dolt-->
        <div class="footer">
            <img src="../global/img/Logo.svg" alt="Dolt.inc" height="32px" class="logo">
        </div>
    </nav>

    <main></main>
</body>

</html>
</body>

</html>