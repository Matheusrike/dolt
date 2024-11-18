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
</head>

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
</head>

<body>
    <nav class="sidebar" id="sidebar">
        <div id="user" class="user-info">
            <span id="user-icon" class="material-symbols-rounded" style="color: var(--Dark-Blue);">account_circle</span>
            <span class="item-description">$Username</span>
        </div>

        <!-- Mensagem de alerta para o usuário caso ele ainda não tenha criado nenhum grupo -->
        <div class="container" id="alert" style="display: none;">
            <img src="./assets/img/noneGroup-icon.svg">
            <p>Você ainda não possui nenhum grupo criado</p>
        </div>

        <!-- Campo com os grupos criados pelo usuário -->
        <div class="container">
            <div class="group">
                <div class="group-infos active">
                    <span id="group-icon" class="material-symbols-rounded">format_list_bulleted</span>
                    <p>$Group_test</p>
                </div>
                <div class="group-options">
                    <button id="edit" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect">
                        <span class="material-symbols-rounded">edit</span>
                    </button>
                    <button id="delete" class="rounded-tertiary-button mdl-js-button mdl-js-ripple-effect">
                        <span class="material-symbols-rounded">delete</span>
                    </button>
                </div>
            </div>

            <div class="group">
                <div class="group-infos">
                    <span id="group-icon" class="material-symbols-rounded">format_list_bulleted</span>
                    <p>$Group_test</p>
                </div>
            </div>

            <div class="group">
                <div class="group-infos">
                    <span id="group-icon" class="material-symbols-rounded">format_list_bulleted</span>
                    <p>$Group_test</p>
                </div>
            </div>
            
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
</body>

</html>
</body>

</html>