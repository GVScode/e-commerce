<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="/ecommerce/assets/style.css">
</head>
<body>

<div class="logout-wrapper">
    <div class="logout-card">
        <div class="logout-icon">👋</div>
        <h2 class="logout-title">Você saiu da sua conta</h2>
        <p class="logout-message">
            Sua sessão foi encerrada com sucesso.
        </p>
        <a href="login.php" class="logout-btn">
            Fazer login novamente
        </a>
    </div>
    
</div>
<!-- FOOTER -->
<footer class="main-footer">
    <div class="footer-container">

        <div class="footer-column">
            <h3>🛍️ MyStore</h3>
            <p>Seu marketplace de tecnologia com qualidade, segurança e os melhores preços.</p>
        </div>

        <div class="footer-column">
            <h4>Links Rápidos</h4>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Minha Conta</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>Atendimento</h4>
            <ul>
                <li>Email: suporte@mystore.com</li>
                <li>Telefone: (11) 99999-9999</li>
                <li>Seg–Sex: 9h às 18h</li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>Redes Sociais</h4>
            <div class="social-links">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © <?= date('Y'); ?> MyStore - Todos os direitos reservados.
    </div>
</footer>
</body>

</html>