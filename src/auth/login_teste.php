<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Teste</title>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="../backend/login_verify.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="user_email" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="user_password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
