<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../global/global.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./style_form.css">
</head>

<body class="body">
    <!--formulário de registro-->

    <main class="mainForm">

        <div class="container-form">

            <div class="logo">
                <img src="./img/Logo_2.png">
            </div>

            <h1 class="titulo">É sua primeira vez usando o Dolt?</h1>
            <p class="p">Registre-se para começar!</p>

            <div class="divForm">
                <form method="post" class="form">
                    <label class="nome">Nome: </label>
                    <input type="text" required class="inNome">
                    <br>

                    <label class="email">Email: </label>
                    <input type="email" required class="inEmail">
                    <br>

                    <button type="submit" class="cadastrar">Cadastrar-se</button>
                </form>
            </div>

        </div>

    </main>
</body>

</html>

<!--verificação de se as senhas são iguais-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST['senha'];
    $confirmSenha = $_POST['confirmSenha'];

    if ($senha !== $confirmSenha) {
        echo "Os dois campos de senha devem ser iguais";
    } else {
        echo "Formulário enviado com sucesso!";
    }
}
?>