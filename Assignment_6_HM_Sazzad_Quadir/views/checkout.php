<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart = new Cart();
    $cart->clearCart();
    echo "<p>Thank you for your purchase!</p>";
} else {
    $cart = new Cart();
    $cartItems = $cart->getCartItems();
    ?>
    <h2>Checkout</h2>
    <div class="checkout-items">
        <?php foreach ($cartItems as $item): ?>
            <div class="checkout-item">
                <h3><?php echo $item->getName(); ?></h3>
                <p>Price: $<?php echo $item->getPrice(); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <form method="POST" action="">
        <button type="submit">Complete Purchase</button>
    </form>
    <?php
}
