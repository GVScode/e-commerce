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
</html>