<?php
include 'config.php';

$total = 0;
?>
<link rel="stylesheet" href="/ecommerce/assets/style.css">
<div class="cart-wrapper">
    <h2 class="cart-title">🛒 Seu Carrinho</h2>
    <a href="index.php">← Continuar comprando</a>

    <?php
    if (!empty($_SESSION['cart'])) {

        foreach ($_SESSION['cart'] as $id => $qty) {

            $id = (int)$id;
            $result = $conn->query("SELECT * FROM products WHERE id = $id");

            if ($result && $result->num_rows > 0) {

                $product = $result->fetch_assoc();
                $subtotal = $product['price'] * $qty;
                $total += $subtotal;
    ?>

                <div class="cart-item">
                    <div class="cart-info">
                        <span class="cart-product-name"><?= $product['name']; ?></span>
                        <span class="cart-quantity">Quantidade: <?= $qty; ?></span>
                    </div>

                    <div class="cart-price">
                        R$ <?= number_format($subtotal, 2, ',', '.'); ?>
                    </div>

                    <a href="remove_from_cart.php?id=<?= $id; ?>">
                        <button class="remove-btn">Remover</button>
                    </a>
                </div>

    <?php
            }
        }
    ?>

        <div class="cart-total">
            Total: R$ <?= number_format($total, 2, ',', '.'); ?>
        </div>

        <a href="checkout.php" class="checkout-btn">Finalizar Compra</a>

    <?php
    } else {
        echo "<div class='empty-cart'>Seu carrinho está vazio.</div>";
    }
    ?>
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