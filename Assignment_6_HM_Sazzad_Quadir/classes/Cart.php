<?php

class Cart {
    public function addToCart($productId) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (!in_array($productId, $_SESSION['cart'])) {
            $_SESSION['cart'][] = $productId;
        }
    }

    public function getCartItems() {
        if (!isset($_SESSION['cart'])) {
            return [];
        }

        $products = Product::getAllProducts();
        $cartItems = [];

        foreach ($_SESSION['cart'] as $productId) {
            foreach ($products as $product) {
                if ($product->getId() == $productId) {
                    $cartItems[] = $product;
                }
            }
        }

        return $cartItems;
    }

    public function removeFromCart($productId) {
        if (($key = array_search($productId, $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$key]);
        }
    }

    public function clearCart() {
        unset($_SESSION['cart']);
    }
}
