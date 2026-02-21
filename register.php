<?php
include 'config.php';

$message = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verificar se já existe
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $message = "Este email já está cadastrado!";
    } else {

        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);

        if ($stmt->execute()) {
            $message = "Cadastro realizado com sucesso!";
            $success = true;
        } else {
            $message = "Erro ao cadastrar.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-card">

        <h2 class="auth-title">Criar Conta</h2>
        <p class="auth-subtitle">Cadastre-se para começar</p>

        <?php if ($message): ?>
            <div class="auth-message <?= $success ? 'success' : 'error' ?>">
                <?= $message ?>
            </div>
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

            <button type="submit" class="auth-btn">Cadastrar</button>
        </form>

        <p class="auth-link">
            Já possui conta? <a href="login.php">Fazer login</a>
        </p>

    </div>
</div>
<div class="auth-wrapper">
    <div class="auth-card">
        ...
    </div>
</div>
</body>
</html>