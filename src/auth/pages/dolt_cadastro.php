<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/src/global/global.css">
    <link rel="stylesheet" href="./styles/style_definir_senha.css">
</head>

<body>
    <main class="main">
        <section class="form-section">

            <div class="logo">
                <a href=""><img src="../img/Logo_2.png"></a>
            </div>

            <div class="form-div">

                <div class="form-div-text">
                    <h3 class="title">Cadastrar-se</h3>
                    <p class="p">Preencha com suas informações para criar sua conta</p>
                </div>

                <form action="post">

                    <label>Nome de Usuário*</label>
                    <input type="text">

                    <label>E-mail*</label>
                    <input type="text">

                    <button class="button">Cadastrar</button>

                    <div class="p-div">
                        <p class="p">Já possui uma conta? <a href="">Entre</a></p>
                    </div>

                </form>
            </div>

        </section>

        <section class="img-section">

            <div class="img-div">
                <div>
                    <img src="" class="stars">
                    <p class="comment">"A Dolt mudou totalmente minha rotina! Agora consigo planejar minhas tarefas com muito mais organização e rapidez."</p>
                    <img src="" class="avatar">
                    <p class="name"></p>
                </div>

                <div>
                    <img src="" class="stars">
                    <p class="comment">“Passei a usar a Dolt para organizar minhas demandas de trabalho e a produtividade aumentou muito.”</p>
                    <img src="" class="avatar">
                    <p class="name"></p>
                </div>

                <div>
                    <img src="" class="stars">
                    <p class="comment">“Simples, eficiente e bonito! Uso a Dolt tanto para tarefas pessoais quanto para meus projetos, e ela sempre me ajuda a não perder prazos.”</p>
                    <img src="" class="avatar">
                    <p class="name"></p>
                </div>
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