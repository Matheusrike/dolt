<?php
include 'arrays.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolt - Termos de Uso</title>
    <link rel="stylesheet" href="termos.css">
</head>

<body>
    <?php
    renderheader();
    ?>

    <section class="initial-section">
        <div class="text-container">
            <p class="initial-text">Termos de Uso</p>
            <p class="initial-subtext">Bem-vindo à nossa seção de Termos de Uso. Aqui você encontrará informações importantes sobre os direitos e responsabilidades ao utilizar nossa plataforma.</p>
        </div>
        <img src="img/termos.svg" class="img-inicial">
    </section>

    <section class="termos-section">
        <div class="termos-container">
            <?php
            $id = 1;
            foreach ($termos as $titulo => $conteudo) {
                echo "
            <div id='$id' class='termos-minicont'>
                <div class='termos-text'> $id. $titulo </div>
                <div class='termos-subtext'>$conteudo</div>
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
                foreach ($termos as $titulo => $conteudo) {
                    echo "<a class='botao-red'href='#$id'>$titulo</a>";
                    $id++;
                }
                ?>
            </div>
        </div>
    </section>

    <?php
    renderfooter()
    ?>
</body>

</html>