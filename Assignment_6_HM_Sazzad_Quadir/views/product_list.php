<?php
$products = Product::getAllProducts();
?>
<h2>Product List</h2>
<div class="product-list">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h3><?php echo $product->getName(); ?></h3>
            <p><?php echo $product->getDescription(); ?></p>
            <p>Price: $<?php echo $product->getPrice(); ?></p>
            <a href="index.php?action=add_to_cart&id=<?php echo $product->getId(); ?>">Add to Cart</a>
        </div>
    <?php endforeach; ?>
</div>
