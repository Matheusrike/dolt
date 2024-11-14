<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
            <div class="alert">
                <img src="./assets/img/alert-icon.svg" height="100px">
                <p>Você não possui nenhum grupo criado</p>
            </div>
            <form class="add-group-container" action="">
                <div class="input-group">
                    <input required="" type="text" name="groupName" id="groupName" autocomplete="off" class="input">
                    <label class="user-label" for="groupName">Nome do grupo</label>
                </div>
                <button class="add-button" type="submit"><img src="./assets/img/add-icon.svg" alt="" height="20px"></button>
            </form>
        </div>

        <hr>

        <footer>
            <img src="../global/img/Logo.svg" alt="Logo da Dolt" height="30px">
            <button><img src="./assets/img/logout-icon.svg" alt="Sair" height="20px"></button>
        </footer>
    </div>
</body>

</html>