<?php
include 'config.php';

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="/e-commerce/assets/style.css">
</head>

<body>

<div class="checkout-wrapper">
    <div class="checkout-card">

        <h2 class="checkout-title">🧾 Finalizar Compra</h2>

        <div class="checkout-summary">

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

                        <div class="checkout-item">
                            <span><?= $product['name']; ?> (x<?= $qty; ?>)</span>
                            <span>R$ <?= number_format($subtotal, 2, ',', '.'); ?></span>
                        </div>

            <?php
                    }
                }
            ?>

        </div>
        

        <div class="checkout-total">
            Total: <span>R$ <?= number_format($total, 2, ',', '.'); ?></span>
        </div>

        <button class="checkout-btn">Confirmar Pagamento</button>

        <div class="checkout-success">
            Pagamento seguro 🔒
        </div>

        <?php
            unset($_SESSION['cart']);
            } else {
                echo "<p>Seu carrinho está vazio.</p>";
            }
        ?>

    </div>
</div>



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
