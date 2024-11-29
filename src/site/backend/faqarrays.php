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
            <img src="../img/Logo.svg" class="imagem-head">
        </div>
        <div class="header-div2">
            <button class="btn-cad"><a href="#">Acessar</a></button>
            <button class="btn-log"><a href="#">Iniciar Jornada</a></button>
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
$sections = [
    "Como funciona o sistema?" => "Nosso sistema de gerenciamento de tarefas permite que você organize suas atividades de forma eficiente. Você pode criar, editar e acompanhar suas tarefas em tempo real. Além disso, oferecemos integrações com outras ferramentas para facilitar seu trabalho.",
    "É seguro usar?" => "Sim, a segurança dos seus dados é nossa prioridade. Utilizamos criptografia avançada para proteger suas informações. Além disso, realizamos auditorias regulares para garantir a integridade do sistema.",
    "Posso cancelar minha assinatura?" => "Sim, você pode cancelar sua assinatura a qualquer momento. Basta acessar sua conta e seguir as instruções de cancelamento. Não haverá cobranças adicionais após o cancelamento.",
    "Como recuperar minha senha?"=> "Para recuperar sua senha, clique na opção 'Esqueci minha senha' na página de login. Você receberá um e-mail com instruções para redefinir sua senha. Siga os passos indicados para criar uma nova senha.",
    "Onde posso obter ajuda?"=> "Se você ainda tiver dúvidas, nossa equipe de suporte está à disposição. Você pode entrar em contato através do nosso formulário de contato. Estamos aqui para ajudar você!",

];
