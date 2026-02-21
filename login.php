<?php
include 'config.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error = "Email ou senha inválidos!";
    }
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

<div class="login-wrapper">
    <div class="login-card">

        <h2 class="login-title">Bem-vindo 👋</h2>
        <p class="login-subtitle">Faça login para continuar</p>

        <?php if ($error): ?>
            <div class="login-error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" class="login-form">
            <div class="input-group">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>

            <div class="input-group">
                <input type="password" name="password" required>
                <label>Senha</label>
            </div>

            <button type="submit" class="login-btn">Entrar</button>
        </form>

    </div>
</div>

</body>
</html>