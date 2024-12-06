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

$cards = [
    [
        "img" => "cabeca.svg",
        "text" => "Inovação Contínua como Pilar de Crescimento",
        "subtext" => " Buscamos soluções inovadoras e melhorias contínuas para aprimorar nossas atividades diárias e elevar a qualidade do nosso trabalho."
    ],
    [
        "img"=> "escudo.svg",
        "text"=> "Transparência: Nossas Ações Honestidade",
        "subtext"=> "Acreditamos que a comunicação aberta é essencial para o sucesso, criando um ambiente de confiança e permitindo a colaboração eficaz.",
    ],
    [
        "img"=> "coracao.svg",
        "text"=> "Empatia: Entendendo as Necessidades dos Outros",
        "subtext"=> "Criamos um mundo vibrante, cheio de cores e sons, onde cada momento é uma oportunidade de aprendizado e descoberta.",
    ],
    [
        "img"=> "mao.svg",
        "text"=> "Colaboração: Juntos Somos Mais Fortes",
        "subtext"=> "Trabalhamos em equipe para alcançar nossos objetivos de forma eficaz, compartilhando ideias e apoiando uns aos outros em cada etapa.",
    ],
];

function rendercards($cards)
{
    foreach ($cards as $card) {
        echo '
        <div class="valores-card">
            <img src="../img/' . $card["img"] . '" class="img-valoresmini">
            <p class="valores-cardtext">' . $card["text"] . '</p>
            <p class="valores-cardsubtext">' . $card["subtext"] . '</p>
        </div>
        ';
    }
};

$colaboradores = [
    [
        "nome" => "Matheus Mastroumano",
        "funcao" => "Desenvolvedor",
        "feitos" => "Responsável por desenvolver as páginas do site.",
        "git" => '<svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.667 0.0114746C23.9515 0.0114746 30.667 6.89636 30.667 15.3909C30.667 22.1843 26.374 27.9474 20.4175 29.9829C19.657 30.1344 19.387 29.6541 19.387 29.2446C19.387 28.7376 19.405 27.0817 19.405 25.0237C19.405 23.5897 18.925 22.6537 18.3865 22.1767C21.727 21.7957 25.237 20.4951 25.237 14.5881C25.237 12.9081 24.655 11.5372 23.692 10.4602C23.848 10.0717 24.3625 8.50739 23.545 6.3894C23.545 6.3894 22.288 5.9773 19.4245 7.9663C18.226 7.6258 16.942 7.45448 15.667 7.44848C14.392 7.45448 13.1095 7.6258 11.9125 7.9663C9.04599 5.9773 7.78599 6.3894 7.78599 6.3894C6.97149 8.50739 7.48599 10.0717 7.64049 10.4602C6.68199 11.5372 6.09549 12.9081 6.09549 14.5881C6.09549 20.4801 9.59799 21.8007 12.9295 22.1892C12.5005 22.5732 12.112 23.2506 11.977 24.2451C11.122 24.6381 8.94998 25.3182 7.61198 22.9677C7.61198 22.9677 6.81849 21.4901 5.31249 21.3821C5.31249 21.3821 3.84999 21.3626 5.21049 22.3166C5.21049 22.3166 6.19299 22.7891 6.87549 24.5666C6.87549 24.5666 7.75599 27.3116 11.929 26.3816C11.9365 27.6671 11.95 28.8786 11.95 29.2446C11.95 29.6511 11.674 30.1268 10.9255 29.9843C4.96448 27.9518 0.666992 22.1858 0.666992 15.3909C0.666992 6.89636 7.38399 0.0114746 15.667 0.0114746Z" fill="#AAAAAA" class="git-path"/>
</svg>',
"link" => "https://github.com/Houzeeer"
    ],
    [
        "nome" => "Matheus Alves",
        "funcao" => "Gerente de projeto / Desenvolvedor",
        "feitos" => "Responsável por liderar a equipe do projeto,  desenvolver a aplicação e design do projeto.",
        "git" => '<svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.667 0.0114746C23.9515 0.0114746 30.667 6.89636 30.667 15.3909C30.667 22.1843 26.374 27.9474 20.4175 29.9829C19.657 30.1344 19.387 29.6541 19.387 29.2446C19.387 28.7376 19.405 27.0817 19.405 25.0237C19.405 23.5897 18.925 22.6537 18.3865 22.1767C21.727 21.7957 25.237 20.4951 25.237 14.5881C25.237 12.9081 24.655 11.5372 23.692 10.4602C23.848 10.0717 24.3625 8.50739 23.545 6.3894C23.545 6.3894 22.288 5.9773 19.4245 7.9663C18.226 7.6258 16.942 7.45448 15.667 7.44848C14.392 7.45448 13.1095 7.6258 11.9125 7.9663C9.04599 5.9773 7.78599 6.3894 7.78599 6.3894C6.97149 8.50739 7.48599 10.0717 7.64049 10.4602C6.68199 11.5372 6.09549 12.9081 6.09549 14.5881C6.09549 20.4801 9.59799 21.8007 12.9295 22.1892C12.5005 22.5732 12.112 23.2506 11.977 24.2451C11.122 24.6381 8.94998 25.3182 7.61198 22.9677C7.61198 22.9677 6.81849 21.4901 5.31249 21.3821C5.31249 21.3821 3.84999 21.3626 5.21049 22.3166C5.21049 22.3166 6.19299 22.7891 6.87549 24.5666C6.87549 24.5666 7.75599 27.3116 11.929 26.3816C11.9365 27.6671 11.95 28.8786 11.95 29.2446C11.95 29.6511 11.674 30.1268 10.9255 29.9843C4.96448 27.9518 0.666992 22.1858 0.666992 15.3909C0.666992 6.89636 7.38399 0.0114746 15.667 0.0114746Z" fill="#AAAAAA" class="git-path"/>
</svg>',
"link" => "https://github.com/Matheusrike"
    ],
    [
        "nome" => "Victor Cestari",
        "funcao" => "Desenvolvedor",
        "feitos" => "Responsável por desenvolver a página de autenticação de usuários e design do projeto.",
        "git" => '<svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg" >
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.667 0.0114746C23.9515 0.0114746 30.667 6.89636 30.667 15.3909C30.667 22.1843 26.374 27.9474 20.4175 29.9829C19.657 30.1344 19.387 29.6541 19.387 29.2446C19.387 28.7376 19.405 27.0817 19.405 25.0237C19.405 23.5897 18.925 22.6537 18.3865 22.1767C21.727 21.7957 25.237 20.4951 25.237 14.5881C25.237 12.9081 24.655 11.5372 23.692 10.4602C23.848 10.0717 24.3625 8.50739 23.545 6.3894C23.545 6.3894 22.288 5.9773 19.4245 7.9663C18.226 7.6258 16.942 7.45448 15.667 7.44848C14.392 7.45448 13.1095 7.6258 11.9125 7.9663C9.04599 5.9773 7.78599 6.3894 7.78599 6.3894C6.97149 8.50739 7.48599 10.0717 7.64049 10.4602C6.68199 11.5372 6.09549 12.9081 6.09549 14.5881C6.09549 20.4801 9.59799 21.8007 12.9295 22.1892C12.5005 22.5732 12.112 23.2506 11.977 24.2451C11.122 24.6381 8.94998 25.3182 7.61198 22.9677C7.61198 22.9677 6.81849 21.4901 5.31249 21.3821C5.31249 21.3821 3.84999 21.3626 5.21049 22.3166C5.21049 22.3166 6.19299 22.7891 6.87549 24.5666C6.87549 24.5666 7.75599 27.3116 11.929 26.3816C11.9365 27.6671 11.95 28.8786 11.95 29.2446C11.95 29.6511 11.674 30.1268 10.9255 29.9843C4.96448 27.9518 0.666992 22.1858 0.666992 15.3909C0.666992 6.89636 7.38399 0.0114746 15.667 0.0114746Z" fill="#AAAAAA" class="git-path"/>
</svg>',
"link"=> "https://github.com/vc-franca"
    ],  
];

function rendercolaboradores($colaboradores)
{
    foreach ($colaboradores as $colaborador) {
        echo '
        <div class="colaboradores-card">
                <div class="colaboradores-minicont">
                    <div class="colaboradores-minidiv">
                        <p class="colaboradores-nome">' . $colaborador["nome"] . '</p>
                        <p class="colaboradores-funcao">' . $colaborador["funcao"] . '</p>
                    </div>
                    <p class="colaboradores-feitos">' . $colaborador["feitos"] . '</p>
                </div>
            <a href=' . $colaborador["link"] . ' class="git">' . $colaborador["git"] . '</a>
        </div>
        ';
    }
};