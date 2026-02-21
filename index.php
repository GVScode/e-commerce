<?php
include 'config.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>Bem-vindo ao E-commerce</h1>
<a href="cart.php">🛒 Carrinho</a>
<a href="logout.php">Sair</a>

<!-- Carrossel -->
<div class="carousel">
<?php while($row = $result->fetch_assoc()) { ?>
    <div class="carousel-item">
        <img src="<?= $row['image'] ?>">
        <h3><?= $row['name'] ?></h3>
    </div>
<?php } ?>
</div>

<hr>

<!-- Produtos em Grade -->
<div class="grid">
<?php
$result = $conn->query("SELECT * FROM products");
while($row = $result->fetch_assoc()) { ?>
    <div class="card">
        <img src="<?= $row['image'] ?>">clea
        <h3><?= $row['name'] ?></h3>
        <p>R$ <?= $row['price'] ?></p>
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit">Adicionar</button>
        </form>
    </div>
<?php } ?>
</div>

</body>
</html>