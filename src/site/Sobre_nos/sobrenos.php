 <?php
include 'arrays.php';
 ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sobrenos.css">
</head>

<body>
    <?php 
    renderheader();
    ?>

    <section class="initial-section">
        <div class="content-container">
            <img src="img/imagem_principal.svg" class="img-inicial">
            <div class="text-container">
                <p class="initial-text">Conheça-nos</p>
                <p class="initial-bigtext">Uma Cultura Feita para Conectar, Inovar e Crescer</p>
                <p class="initial-subtext">Na Dolt, acreditamos que boas ideias surgem em um ambiente que valoriza
                    diversidade, teamwork e aprendizado. Cada membro da equipe é incentivado a crescer e colaborar na
                    transformação de desafios em soluções. Junte-se a nós!</p>
                <div class="initial-btndiv">
                    <button class="btn-saibamais">Saiba Mais</button>
                    <button class="btn-nossoprojeto">Nosso Projeto</button>
                </div>
            </div>
        </div>
    </section>

    <section class="missao-section">
        <div class="missao-minicont">
            <img src="img/alvo.svg" class="img-missaomini">
            <p class="missao-text">Nossa missão é transformar a gestão de tarefas em uma experiência simples.</p>
            <p class="missao-subtext">Nosso objetivo é otimizar a organização e a produtividade nas rotinas diárias. Uma
                gestão eficaz de tarefas é fundamental para o sucesso de projetos, garantindo resultados melhores e
                desenvolvimento pessoal.</p>
        </div>
        <img src="img/imagem1.svg" class="img-missao">
    </section>

    <section class="visao-section">
        <img src="img/imagem2.svg" class="img-visao">
        <div class="visao-minicont">
            <img src="img/Binoculos.svg" class="img-visaomini">
            <p class="visao-text">Nossa visão é transformar a gestão de tarefas em uma experiência simples e eficaz.</p>
            <p class="visao-subtext">Acreditamos que a organização é a chave para a produtividade. Nossa missão é
                oferecer uma plataforma que facilite o gerenciamento de tarefas e ajude as pessoas a alcançar seus
                objetivos com eficiência.</p>
        </div>
    </section>

    <section class="valores-section">
        <div class="valores-minicont">
            <p class="valores-text">Nossos Valores Fundamentais na Empresa</p>
            <p class="valores-subtext">Na nossa empresa, acreditamos que os valores são a base de tudo. Eles nos guiam em cada decisão e ação que tomamos.</p>
            <img src="img/valores.svg" class="img-valores">
        </div>
        <div class="valores-cardcont">
            <?php
            rendercards($cards);
            ?>
        </div>
    </section>

    <section class="equipe-section">
        <div class="equipe-minicont">
            <div class="equipe-minitextcont">
            <p class="equipe-minitext">Equipe</p>
            </div>
            <div class="equipe-textcont">
            <p class="equipe-text">Nossa equipe</p>
            <p class="equipe-subtext">Conheça os colaboradores que impulsionam nosso sucesso</p>
            </div>
        </div>
        <div class="equipe-cardcont">
            <?php
            rendercolaboradores($colaboradores);
            ?>
        </div>
        <div class="equipe-minicont2">
            <div class="equipe-textcont2">
            <p class="equipe-bigtext">Saiba mais sobre o projeto!</p>
            <p class="equipe-subtext">Confira nosso repositório e conheça mais sobre nosso projeto.</p>
            </div>
            <button class="btn-repositorio"><a href="">Repositório do Github</a></button>
        </div>
    </section>
</body>
<?php
renderfooter();
?>
</html>