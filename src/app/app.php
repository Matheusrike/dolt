<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt App</title>
    <link rel="/src/global/img/Favicon.ico" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="../global/global.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css">

    <!-- Materialize CDN links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <header>
            <img src="./assets/img/profile-icon.svg" alt="" height="50px">
            <?php
            echo '<p>Nome de usuário</p>';
            ?>
        </header>
        <hr>
        <div class="container">
            <div class="alert"></div>
            <div class="newGroup"></div>
        </div>
        <hr>
        <footer>
            <img src="../global/img/Logo.svg" alt="Logo da Dolt" height="30px">
            <button><img src="./assets/img/logout-icon.svg" alt="Sair" height="20px"></button>
        </footer>
    </div>
</body>

</html>