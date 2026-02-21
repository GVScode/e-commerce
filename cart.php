<?php
include 'config.php';

$total = 0;
?>

<h2>Seu Carrinho</h2>
<a href="index.php">Voltar</a>

<?php
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id => $qty) {
        $result = $conn->query("SELECT * FROM products WHERE id=$id");
        $product = $result->fetch_assoc();
        $subtotal = $product['price'] * $qty;
        $total += $subtotal;

        echo "<p>{$product['name']} - Qtd: $qty - Subtotal: R$ $subtotal 
        <a href='remove_from_cart.php?id=$id'>Remover</a></p>";
    }

    echo "<h3>Total: R$ $total</h3>";
    echo "<a href='checkout.php'>Finalizar Compra</a>";
} else {
    echo "Carrinho vazio!";
}
?>