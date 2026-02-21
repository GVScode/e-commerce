<?php
include 'config.php';

$total = 0;
?>
<link rel="stylesheet" href="/e-commerce/assets/style.css">
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
