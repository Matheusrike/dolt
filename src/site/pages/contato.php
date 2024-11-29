<?php
include '../backend/contatoarrays.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt - Contato</title>
    <link rel="stylesheet" href="../assets/css/contato.css">
</head>

<body>
    <?php
    renderheader()
    ?>

    <section class="contato-section">
        <div class="contato-container">
            <img src="../img/mensagem.svg" class="contato-img">
            <div class="contato-form">
                <div class="text-container">
                    <p class="contato-minitext">Contato</p>
                    <div class="minitext-container">
                        <p class="contato-title">Entre em contato</p>
                        <p class="contato-text">Estamos aqui para ajudar você!</p>
                    </div>
                </div>
                <div class="input-section">
                    <div class="input-container">
                        <p class="input-text">Nome*</p>
                        <input type="text" name="nome" class="small-input">
                    </div>
                    <div class="input-container">
                        <p class="input-text">E-mail*</p>
                        <input type="text" name="e-mail" class="small-input">
                    </div>
                    <div class="input-container">
                        <p class="input-text">Mensagem*</p>
                        <textarea name="mensagem" placeholder="Escreva sua mensagem..." class="big-input"></textarea>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" name="Enviar" class="checkbox"><a href="../pages/termos.php" class="checkbox-text">Aceito os Termos</a>
                    </div>
                    <button class="btn-enviar">Enviar</button>
                </div>
            </div>
        </div>
    </section>
    <?php
    renderfooter()
    ?>
</body>

</html>