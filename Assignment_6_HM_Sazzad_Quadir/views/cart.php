<?php
$cart = new Cart();
$cartItems = $cart->getCartItems();
?>
<h2>Your Cart</h2>
<div class="cart-items">
    <?php if (empty($cartItems)): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <?php foreach ($cartItems as $item): ?>
            <div class="cart-item">
                <h3><?php echo $item->getName(); ?></h3>
                <p>Price: $<?php echo $item->getPrice(); ?></p>
                <a href="index.php?action=remove_from_cart&id=<?php echo $item->getId(); ?>">Remove</a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<a href="index.php?page=checkout">Proceed to Checkout</a>
