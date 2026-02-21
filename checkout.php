<?php
include 'config.php';

$total = 0;

foreach ($_SESSION['cart'] as $id => $qty) {
    $result = $conn->query("SELECT * FROM products WHERE id=$id");
    $product = $result->fetch_assoc();
    $total += $product['price'] * $qty;
}

echo "<h2>Pagamento</h2>";
echo "<h3>Total a pagar: R$ $total</h3>";
echo "<p>Compra finalizada com sucesso!</p>";

unset($_SESSION['cart']);
?>