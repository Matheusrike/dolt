<?php

function renderheader()
{
    echo '
    <header class="header">
        <div class="header-div">
            <p class="head-text"><a href="../pages/sobrenos.php">Sobre Nós</a></p>
            <p class="head-text"><a href="../pages/contato.php">Contato</a></p>
        </div>
        <div>
            <a href="../../index.php"><img src="../img/Logo.svg" class="imagem-head"></a>
        </div>
        <div class="header-div2">
            <button class="btn-cad"><a href="../../app/app.php">Acessar</a></button>
        </div>
    </header>
    ';
};

function renderfooter()
{
    echo '
        <footer>
        <div class="footer-container">
            <div class="footer-minicont">
                <img src="../img/Logo.svg" class="img-footer">
                <div class="footer-textcont">
                    <p class="footer-text1"><a href="../pages/termos.php" class="footer-link">Termos de Uso</a></p>
                    <p class="footer-text2"><a href="../pages/PdP.php" class="footer-link">Política de Privacidade</a></p>
                    <p class="footer-text1"><a href="../pages/contato.php" class="footer-link">Fale Conosco</a></p>
                </div>
                <div class="img-container">
                    <a href=""><img src="../img/Facebook.svg" class="footer-minimg"></a>
                    <a href=""><img src="../img/Instagram.svg" class="footer-minimg"></a>
                    <a href=""><img src="../img/X.svg" class="footer-minimg"></a>
                    <a href=""><img src="../img/LinkedIn.svg" class="footer-minimg"></a>
                    <a href=""><img src="../img/Youtube.svg" class="footer-minimg"></a>
                </div>
            </div>
            <div class="copy-cont">
                <hr class="footer-hr">
                <p class="copyright">© 2024 Dolt. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    ';
};