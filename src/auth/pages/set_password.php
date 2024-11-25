<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definição de Senha</title>
    <link rel="stylesheet" href="/src/global/global.css">
    <link rel="stylesheet" href="../assets/styles/set_password.css">
</head>

<body>
    <main class="main">
        <section class="form-section">

            <div class="logo">
                <a href=""><img src="../img/Logo_2.png"></a>
            </div>

            <div class="form-div">

                <div class="form-div-text">
                    <h3 class="title">Defina sua senha</h3>
                    <p class="p">Defina uma senha forte e segura.</p>
                </div>

                <form action="post">

                    <label>Senha*</label>
                    <input type="text">

                    <label>Confirme sua Senha*</label>
                    <input type="text">

                    <button class="button">Concluir</button>

                </form>
            </div>

        </section>

        <section class="img-section">

            <div class="img-div">
                <img src="../assets/img/mulher_tecnologica.svg">
            </div>

        </section>
    </main>
</body>

</html>

<?php

function renderfooter()
{
    echo '
        <footer>
        <div class="footer-container">
            <div class="footer-minicont">
                <img src="img/Logo.svg" class="img-footer">
                <div class="footer-textcont">
                    <p class="footer-text1"><a href="">Termos de Uso</a></p>
                    <p class="footer-text2"><a href="">Política de Privacidade</a></p>
                    <p class="footer-text1"><a href="">Fale Conosco</a></p>
                </div>
                <div class="img-container">
                    <a href=""><img src="img/Facebook.svg" class="footer-minimg"></a>
                    <a href=""><img src="img/Instagram.svg" class="footer-minimg"></a>
                    <a href=""><img src="img/X.svg" class="footer-minimg"></a>
                    <a href=""><img src="img/LinkedIn.svg" class="footer-minimg"></a>
                    <a href=""><img src="img/Youtube.svg" class="footer-minimg"></a>
                </div>
            </div>
            <div class="copy-cont">
                <hr class="footer-hr">
                <p class="copyright">© 2024 Dolt. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    ';
}

renderfooter();

?>