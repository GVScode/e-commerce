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

<!-- CARROSSEL MODERNO -->
<section class="carousel-section">
    <div class="carousel-container">
        
        <div class="carousel-slide active">
            <img src="assets/images/Bannerroxo.png" alt="Promoção 1">
            <div class="carousel-caption">
                <h2>🔥 Ofertas Imperdíveis</h2>
                <p>Descontos exclusivos por tempo limitado</p>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="assets/images/Banner_smartwatch.png" alt="Promoção 2">
            <div class="carousel-caption">
                <h2>🚀 Novidades da Semana</h2>
                <p>Confira os lançamentos mais desejados</p>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="assets/images/bannerBlack.png" alt="Promoção 3">
            <div class="carousel-caption">
                <h2>💎 Produtos Premium</h2>
                <p>Qualidade e tecnologia para você</p>
            </div>
        </div>

        <!-- Botões -->
        <button class="carousel-btn prev">&#10094;</button>
        <button class="carousel-btn next">&#10095;</button>

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
<script>
    const slides = document.querySelectorAll(".carousel-slide");
    const nextBtn = document.querySelector(".next");
    const prevBtn = document.querySelector(".prev");

    let index = 0;

    function showSlide(i) {
        slides.forEach(slide => slide.classList.remove("active"));
        slides[i].classList.add("active");
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    function prevSlide() {
        index = (index - 1 + slides.length) % slides.length;
        showSlide(index);
    }

    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);

    // Auto play
    setInterval(nextSlide, 5000);
</script>
</body>
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
</html>