<?php
include 'arrays.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt - Política de Privacidade</title>
    <link rel="stylesheet" href="PdP.css?v=1.2">
</head>

<body>
    <?php
    renderheader();
    ?>

    <section class="initial-section">
        <div class="text-container">
            <p class="initial-text">Política de Privacidade</p>
            <p class="initial-subtext">Sua privacidade é nossa prioridade. Esta política descreve como coletamos, usamos e protegemos suas informações pessoais.</p>
        </div>
        <img src="img/seguranca.svg" class="img-inicial">
    </section>

    <section class="seguranca-section">
        <div class="politicas-container">
            <?php
            $id = 1;
            foreach ($politicas as $titulo => $conteudo) {
                echo "
            <div id='$id' class='politicas-minicont'>
                <div class='politicas-text'> $id. $titulo </div>
                <div class='politicas-subtext'>$conteudo</div>
            </div>
            ";
                $id++;
            }
            ?>
        </div>
        <div class="redirecionador">
            <div>
            <p class="red-text">Índice de conteudo</p>
            </div>
            <div class="red-botoes">
            <?php
            $id = 1;
            foreach ($politicas as $titulo => $conteudo) {
                echo "<a class='botao-red'href='#$id'>$titulo</a>";
                $id++;
            }
            ?>
            </div>
        </div>
    </section>
    <?php
    renderfooter();
    ?>
</body>

</html>