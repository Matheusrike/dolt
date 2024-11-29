<?php
include '../backend/paginarrays.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt - Página Inicial</title>
    <link rel="stylesheet" href="../assets/css/pagin.css">
</head>

<body>
    <?php
    renderheader();
    ?>

    <div class="container">
        <div class="textbox">
            <p class="bigtext">Gerencie suas tarefas de forma eficiente</p>
            <p class="subtext">Nossa aplicação de gerenciamento de tarefas ajuda você a organizar seu dia a dia com
                facilidade. Experimente uma nova forma de produtividade e alcance seus objetivos com mais eficiência.
            </p>
            <div class="btn-div">
                <button class="btn-jorn">Iniciar Jornada</button>
                <button class="btn-sai">Saiba Mais</button>
            </div>
        </div>
        <div class="imagem">
            <img src="../img/Image.svg" class="">
        </div>
    </div>
    <section class="initial-section">
        <div class="container2">
            <div>
                <p class="bigtext2">Gerencie suas tarefas de forma simples e eficaz</p>

                <p class="subtext2">Nossa aplicação de gerenciamento de tarefas facilita a organização das suas
                    atividades
                    com uma interface intuitiva que se adapta ao seu fluxo de trabalho.</p>
            </div>
        </div>
        <div class="boxcontainer">
            <div class="box">
                <img src="../img/mais.svg" class="box-img">
                <div class="text-div">
                    <p class="box-bigtext">Crie e acompanhe suas tarefas do dia a dia</p>
                    <p class="box-subtext">Adicione novas tarefas rapidamente e monitore o progresso das suas tarefas
                        pendentes e concluídas.</p>
                </div>
            </div>
            <div class="box">
                <img src="../img/caneta.svg" class="box-img">
                <div class="text-div">
                    <p class="box-bigtext">Edite-as de forma simples e rápida</p>
                    <p class="box-subtext">Faça alterações nas tarefas existentes conforme for necessário para concluí-la.
                    </p>
                </div>
            </div>
            <div class="box">
                <img src="../img/check.svg" class="box-img">
                <div class="text-div">
                    <p class="box-bigtext">Conclua suas tarefas facilmente</p>
                    <p class="box-subtext">Conclua tarefas que já foram finalizadas e mantenha seu dashboard mais limpo e
                        organizado.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ava-section">
        <div class="ava-titlebox">
            <p class="ava-bigtext2">Veja como a Dolt agilizou a vida de nossos clientes!</p>
        </div>
        <div class="avacontainer">
            <div class="ava-box">
                <img src="../img/Stars.svg" class="img-ava">
                <p class="ava-bigtext">“A aplicação é fantástica! A interface é super intuitiva e ajuda muito no meu dia
                    a dia. Perfeito!”</p>
                <img src="../img/pessoa1.svg" class="img-ava2">
                <p class="ava-subtext">Carlos Mendes</p>
            </div>
            <div class="ava-box">
                <img src="../img/Stars.svg" class="img-ava">
                <p class="ava-bigtext">“Adorei a atenção aos detalhes da Dolt. O app organiza minhas tarefas de forma
                    incrível.”</p>
                <img src="../img/pessoa2.svg" class="img-ava2">
                <p class="ava-subtext">Emily Johnson</p>
            </div>
            <div class="ava-box">
                <img src="../img/Stars.svg" class="img-ava">
                <p class="ava-bigtext">“É perfeito para organizar meu dia de forma simples e eficiente. Recomendo para
                    quem quiser se organizar”</p>
                <img src="../img/pessoa3.svg" class="img-ava2">
                <p class="ava-subtext">Lauren Mitchell</p>
            </div>
        </div>
    </section>

    <section class="exper-section">
        <div>
            <img src="../img/experimente.svg" class="exper-img">
        </div>
        <div class="exper-minicont">
            <div class="exper-textcont">
                <p class="exper-text">Experimente grátis!</p>
                <p class="exper-subtext">Entre na sua conta ou crie uma nova para começar a gerenciar suas tarefas e se
                    tornar uma pessoa mais produtiva e organizada!
                </p>
            </div>
            <div class="exper-btncont">
                <button class="btn-jorn">Iniciar Jornada</button>
                <button class="btn-aces">Acessar</button>
            </div>
        </div>
    </section>

    <?php
    renderfooter();
    ?>

</body>

</html>