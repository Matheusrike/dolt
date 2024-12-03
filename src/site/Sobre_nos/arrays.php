<?php

function renderheader()
{
    echo '
    <header class="header">
        <div class="header-div">
            <p class="head-text"><a href="#">Sobre Nós</a></p>
            <p class="head-text"><a href="#">Contato</a></p>
        </div>
        <div>
            <img src="img/Logo.svg" class="imagem-head">
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
                <img src="img/Logo.svg" class="img-footer">
                <div class="footer-textcont">
                    <p class="footer-text1"><a href="" class="footer-link">Termos de Uso</a></p>
                    <p class="footer-text2"><a href="" class="footer-link">Política de Privacidade</a></p>
                    <p class="footer-text1"><a href="" class="footer-link">Fale Conosco</a></p>
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
};

$cards = [
    [
        "img" => "cabeca.svg",
        "text" => "Inovação Contínua como Pilar de Crescimento",
        "subtext" => " Buscamos soluções inovadoras e melhorias contínuas para aprimorar nossas atividades diárias e elevar a qualidade do nosso trabalho."
    ],
    [
        "img"=> "",
        "text"=> "Transparência: Nossas Ações Honestidade",
        "subtext"=> "Acreditamos que a comunicação aberta é essencial para o sucesso, criando um ambiente de confiança e permitindo a colaboração eficaz.",
    ],
    [
        "img"=> "",
        "text"=> "Empatia: Entendendo as Necessidades dos Outros",
        "subtext"=> "Criamos um mundo vibrante, cheio de cores e sons, onde cada momento é uma oportunidade de aprendizado e descoberta.",
    ],
    [
        "img"=> "",
        "text"=> "Colaboração: Juntos Somos Mais Fortes",
        "subtext"=> "Trabalhamos em equipe para alcançar nossos objetivos de forma eficaz, compartilhando ideias e apoiando uns aos outros em cada etapa.",
    ],
];