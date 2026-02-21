<?php

include 'config.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Usando Prepared Statement (mais seguro)
    $stmt = $conn->prepare("SELECT id, email FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user['email'];
        $_SESSION['user_id'] = $user['id'];

        header("Location: index.php");
        exit();
    } else {
        $error = "Email ou senha inválidos!";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-card">

        <h2 class="auth-title">Bem-vindo 👋</h2>
        <p class="auth-subtitle">Faça login para continuar</p>

        <?php if ($error): ?>
            <div class="auth-error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" class="auth-form">
            
            <div class="input-group">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>

            <div class="input-group">
                <input type="password" name="password" required>
                <label>Senha</label>
            </div>

            <button type="submit" class="auth-btn">Entrar</button>

        </form>

        <div class="auth-footer">
            Ainda não tem conta?
            <a href="register.php">Criar conta</a>
        </div>

    </div>
</div>

</body>
</html>