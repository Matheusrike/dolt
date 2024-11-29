<?php

include '../backend/faqarrays.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt - Perguntas Frequentes</title>
    <link rel="stylesheet" href="../assets/css/faq.css">
</head>

<body>
    <?php
    renderheader()
    ?>

    <section class="initial-section">
        <div class="content-container">
            <img src="../img/imagem_inicial.svg" class="imagem-inicial">
            <div class="text-container">
                <p class="initial-text">Tire suas dúvidas com nossas perguntas frequentes</p>
                <div>
                    <p class="initial-subtext">Aqui você encontrará respostas para as perguntas mais comuns sobre nossa plataforma. Se precisar de mais ajuda, não hesite em nos contatar!</p>
                    <div class="initial-btndiv">
                        <button class="btn-saibamais">Saiba Mais</button>
                        <button class="btn-voltar">Voltar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="faq-minicont">
            <div class="faq-textcont">
                <p class="faq-text">Perguntas</p>
                <p class="faq-subtext">Aqui estão algumas perguntas frequentes que podem ajudar você a entender melhor nosso serviço.</p>
            </div>
            <div>
                <?php

                foreach ($sections as $title => $content) {

                    echo "<button class='accordion'><p class='faq-title'>$title</p><span class='symbol'>+</span></button>";
                    echo "<div class='panel'><p class='faq-content'>$content</p></div>";
                }
                ?>
            </div>
        </div>
    </section>

    <?php
    renderfooter()
    ?>

    <script src="../backend/faq.js"></script>

</body>

</html>