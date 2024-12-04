<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt - Login</title>
    <link rel="stylesheet" href="../global/global.css">
    <link rel="stylesheet" href="./login.css">
</head>

<body>

    <main class="main">

        <section class="form-section">

            <form action="login.php" method="post" class="form">

                <h1 class="form-title">Acesse sua conta da Dolt.</h1>

                <div class="input-container">
                    <input type="text" class="input" name="user" required minlength="1">
                    <label for="user">Usuário</label>
                </div>

                <div class="input-container">
                    <input type="password" class="input" name="password" required minlength="1">
                    <label for="password">Senha</label>
                </div>

                <button class="enviar">Entrar</button>

                <?php

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $nome = $_POST['user'];
                    $pass = $_POST['password'];
                    $erros = array();

                    //verificação de usuário
                    if (empty($nome)) {
                        $erros[] = 'O campo nome é obrigatório';
                    } elseif ($nome !== 'admin') {
                        $erros[] = 'Usuário inválido';
                    }

                    //verificação de senha
                    if (empty($pass)) {
                        $erros[] = "O campo senha é obrigatório";
                    } elseif ($pass !== 'admin') {
                        $erros[] = "Senha inválida";
                    }

                    //exibição de erros
                    if (empty($erros)) {
                        header('Location: ../app/app.php');
                    } else {
                        echo '<p class="erro">' . 'Usuário ou senha inválidos' . '</p>';
                    }
                }

                ?>

            </form>

        </section>

        <section class="img-section">
            <img src="../site/img/seguranca.svg">
        </section>

    </main>



</body>

</html>