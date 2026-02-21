<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="/e-commerce/assets/style.css">
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

</body>
</html>