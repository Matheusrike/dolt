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
    <style>
        .popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none; /* O pop-up começa escondido */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    text-align: center;
    animation: popup-animation 0.3s ease-in-out;
}

.popup h2 {
    margin: 0;
    font-size: 20px;
    color: #333;
}

.popup p {
    margin: 10px 0;
    font-size: 16px;
    color: #555;
}

.popup button {
    margin-top: 10px;
    padding: 10px 20px;
    background: #006bd6;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.popup button:hover {
    background: #006bd6;
}
    </style>
    <script>
        // Exibir o pop-up
        function showPopup() {
            const popupOverlay = document.querySelector('.popup-overlay');
            popupOverlay.style.display = 'flex';
        }

        // Fechar o pop-up
        function closePopup() {
            const popupOverlay = document.querySelector('.popup-overlay');
            popupOverlay.style.display = 'none';
        }

        // Interceptar o envio do formulário
        function handleFormSubmit(event) {
            event.preventDefault(); // Impede o envio do formulário
            showPopup(); // Mostra o pop-up
        }
    </script>
</head>

<body>
    <?php renderheader(); ?>

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
                <form onsubmit="handleFormSubmit(event)">
                    <div class="input-section">
                        <div class="input-container">
                            <p class="input-text">Nome*</p>
                            <input type="text" name="nome" class="small-input" required>
                        </div>
                        <div class="input-container">
                            <p class="input-text">E-mail*</p>
                            <input type="email" name="e-mail" class="small-input" required>
                        </div>
                        <div class="input-container">
                            <p class="input-text">Mensagem*</p>
                            <textarea name="mensagem" placeholder="Escreva sua mensagem..." class="big-input" required></textarea>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" name="termos" class="checkbox" required>
                            <a href="../pages/termos.php" class="checkbox-text">Aceito os Termos</a>
                        </div>
                        <button type="submit" class="btn-enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="popup-overlay">
        <div class="popup">
            <h2>Mensagem enviada!</h2>
            <p>Obrigado por entrar em contato. Responderemos em breve.</p>
            <button onclick="closePopup()">Fechar</button>
        </div>
    </div>

    <?php renderfooter(); ?>
</body>

</html>
