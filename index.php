<?php
include 'config.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>E-commerce</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- HEADER -->
<header class="main-header">
    <div class="logo">🛍️ MyStore</div>
    <nav>
        <a href="cart.php">🛒 Carrinho</a>
        <a href="logout.php" class="logout-btn">Sair</a>
    </nav>
</header>

<!-- HERO / BANNER -->
<section class="hero">
    <div class="hero-content">
        <h1>Descubra Produtos Incríveis</h1>
        <p>Qualidade, estilo e os melhores preços em um só lugar.</p>
    </div>
</section>

<!-- PRODUTOS -->
<section class="products-section">
    <h2 class="section-title">Nossos Produtos</h2>

    <div class="products-grid">
        <?php while($row = $result->fetch_assoc()) { ?>
            <div class="product-card">
                <div class="product-image">
                    <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
                </div>

                <div class="product-info">
                    <h3><?= $row['name'] ?></h3>
                    <p class="price">R$ <?= number_format($row['price'], 2, ',', '.') ?></p>

                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" class="add-btn">
                            Adicionar ao Carrinho
                        </button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

</body>
</html>