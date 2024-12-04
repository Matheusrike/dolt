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

$termos = [
    "Aceitação dos Termos" => "Ao acessar e utilizar o site da Dolt ('Plataforma'), você concorda em cumprir e estar vinculado a estes Termos de Uso e à nossa Política de Privacidade. Caso não concorde com estes termos, por favor, não utilize a Plataforma.",

    "Descrição dos Serviços" => "A Dolt fornece uma plataforma de gerenciamento de tarefas para ajudar os usuários a organizar e acompanhar suas atividades diárias. A funcionalidade inclui a criação de tarefas, categorização, agendamento e recursos adicionais, que podem ser alterados ou atualizados a qualquer momento para melhorar a experiência do usuário.",

    "Cadastro e Segurança da Conta" => "Para utilizar certas funcionalidades, você precisará criar uma conta. Você é responsável por manter a segurança de sua conta e senha e por todas as atividades que ocorrerem em sua conta. A Dolt não se responsabiliza por perdas ou danos resultantes de falhas na segurança da conta devido ao compartilhamento de suas credenciais com terceiros.",

    "Privacidade e Dados Pessoais" => "Os dados fornecidos por você ao usar a Plataforma serão tratados conforme nossa [Política de Privacidade](link para a política de privacidade). Garantimos o cumprimento da legislação aplicável sobre proteção de dados pessoais e comprometemo-nos a manter seus dados seguros.",

    "Uso Aceitável" => "Você concorda em utilizar a Plataforma exclusivamente para os fins a que ela se destina e de acordo com todas as leis e regulamentos aplicáveis. É proibido:
        <ul>
<li>Violar ou tentar violar a segurança da Plataforma.
<li>Utilizar a Plataforma para atividades ilegais, como fraudes ou violação de direitos autorais.
<li>Distribuir vírus, spam ou qualquer outro conteúdo malicioso que possa comprometer a segurança da Plataforma ou de seus usuários.
</ul>",

    "Propriedade Intelectual" => "Todos os textos, gráficos, imagens, logotipos, ícones, software e outros conteúdos da Plataforma são propriedade da Dolt ou de seus fornecedores e estão protegidos pelas leis de direitos autorais. É proibido copiar, modificar ou redistribuir qualquer conteúdo sem nossa permissão prévia por escrito.",

    "Limitação de Responsabilidade" => "A Dolt não se responsabiliza por quaisquer danos indiretos, incidentais ou consequenciais resultantes do uso ou da incapacidade de uso da Plataforma. O uso da Plataforma é feito sob sua responsabilidade, e a Dolt não garante que o serviço será ininterrupto, livre de erros ou completamente seguro.",

    "Modificações nos Termos" => "A Dolt reserva-se o direito de alterar estes Termos de Uso a qualquer momento. As alterações entrarão em vigor assim que publicadas na Plataforma. Recomendamos que você revise periodicamente os Termos para estar ciente de quaisquer atualizações.",

    "Rescisão" => "A Dolt pode suspender ou encerrar seu acesso à Plataforma a qualquer momento, sem aviso prévio, se você violar qualquer termo aqui estabelecido. Você também pode encerrar sua conta a qualquer momento. Após a rescisão, seu direito de uso da Plataforma cessará imediatamente.",

    "Disposições Gerais" => "Estes Termos constituem o acordo completo entre você e a Dolt com relação ao uso da Plataforma. Qualquer renúncia a qualquer disposição destes Termos só será efetiva se por escrito e assinada pela Dolt.",
];
 