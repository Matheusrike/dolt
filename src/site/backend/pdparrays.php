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

$politicas = [
        "<p> Informações que Coletamos</p>" => "
        <p>Quando você utiliza a Dolt, podemos coletar as seguintes informações:</p>
        <ul>
        <li>Informações de Cadastro: como nome, e-mail e senha, necessários para criar e acessar sua conta.</li>
        <li>Informações de Uso: detalhes sobre como você usa nossa plataforma, incluindo as tarefas criadas, datas, categorias e outras informações inseridas por você.</li>
        <li>Dados de Dispositivo: informações sobre o dispositivo utilizado para acessar a Dolt, como endereço IP, tipo de navegador e sistema operacional.</li>
        <li>Cookies e Tecnologias Similares: para melhorar sua experiência e personalizar conteúdo, podemos usar cookies que coletam informações sobre sua navegação.</li>
        </ul>",

        "<p> Como Utilizamos Suas Informações</p>" => "
        <p>Utilizamos suas informações para:</p>
        <ul>
        <li>Fornecer e Melhorar a Plataforma: como gerenciamento de tarefas, personalização da experiência e suporte ao cliente.</li>
        <li>Comunicar-se com Você: para enviar notificações importantes, como atualizações de segurança, novidades sobre a plataforma ou responder a solicitações de suporte.</li>
        <li>Análise e Pesquisa: para melhorar nossas funcionalidades e entender o uso da plataforma de forma agregada e anonimizada.</li>
        <li>Segurança e Conformidade Legal: para proteger nossa plataforma contra fraudes, cumprir com obrigações legais e garantir a segurança dos dados.</li>
        </ul>
        ",

        "<p> Uso de Informações por Terceiros</p>" => "<p>Não vendemos, alugamos ou divulgamos suas informações pessoais a terceiros, exceto nos seguintes casos: </p>
        <ul>
        <li>Prestadores de Serviços: podemos compartilhar dados com parceiros de confiança que nos auxiliam na operação da Dolt, como serviços de hospedagem, análise de dados e marketing. Estes prestadores têm acesso limitado aos dados e estão contratualmente obrigados a protegê-los.</li>
        <li>Requisitos Legais: podemos divulgar informações para cumprir obrigações legais, responder a solicitações de autoridades ou proteger nossos direitos em caso de litígios.</li>
        <li>Mudanças na Empresa: caso haja fusão, aquisição ou venda de ativos, suas informações podem ser transferidas aos novos proprietários, que se comprometerão a seguir os termos desta Política de Privacidade.</li>
        </ul>
        ",

        "<p> Segurança dos Dados</p>" => "<p> Implementamos medidas de segurança adequadas para proteger suas informações pessoais contra acessos não autorizados, perda ou alteração. Isso inclui o uso de criptografia, controles de acesso e outras práticas recomendadas de segurança. No entanto, nenhuma transmissão de dados pela internet ou armazenamento digital é 100% seguro, e não podemos garantir proteção absoluta. </p>",

        "<p> Retenção de Dados</p>" => "<p>Mantemos suas informações apenas enquanto for necessário para fornecer nossos serviços ou conforme exigido por leis e regulamentos aplicáveis. Após esse período, suas informações são apagadas ou anonimizadas.</p>",

        "<p> Seus Direitos</p>" => "
        <p>Você possui certos direitos sobre seus dados pessoais, incluindo:<p>
        <ul>
        <li>Acesso: você pode solicitar uma cópia dos seus dados pessoais que mantemos.</li>
        <li>Correção: caso suas informações estejam incorretas, você pode solicitar a correção.</li>
        <li>Exclusão: você pode solicitar a exclusão de seus dados pessoais, salvo se houver uma base legal que exija a retenção.</li>
        <li>Portabilidade: em alguns casos, você tem o direito de solicitar a transferência dos seus dados para outra organização.</li>
        </ul>
        <p>Para exercer seus direitos, entre em contato conosco no endereço abaixo. Responderemos dentro de um prazo razoável e conforme exigido por lei.</p>
        ",

        "<p> Cookies e Tecnologias Similares</p>" => "<p>Utilizamos cookies para personalizar sua experiência e entender como nossa plataforma é utilizada. Você pode ajustar as configurações de cookies no seu navegador, mas isso pode afetar algumas funcionalidades da Dolt.</p>",

        "<p> Alterações nesta Política de Privacidade</p>" => "<p>Podemos atualizar esta Política de Privacidade periodicamente para refletir alterações em nossos serviços ou exigências legais. Notificaremos sobre mudanças importantes através de avisos no site ou e-mail. Recomendamos que você reveja esta Política regularmente.</p>",

]

?>