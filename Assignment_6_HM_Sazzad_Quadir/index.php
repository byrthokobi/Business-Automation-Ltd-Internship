<?php
session_start();

require_once 'classes/Product.php';
require_once 'classes/User.php';
require_once 'classes/Cart.php';

$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? null;

if ($action === 'add_to_cart') {
    $productId = $_GET['id'];
    $cart = new Cart();
    $cart->addToCart($productId);
    header('Location: index.php?page=cart');
    exit;
} elseif ($action === 'remove_from_cart') {
    $productId = $_GET['id'];
    $cart = new Cart();
    $cart->removeFromCart($productId);
    header('Location: index.php?page=cart');
    exit;
}

include 'views/header.php';

if ($page === 'cart') {
    include 'views/cart.php';
} elseif ($page === 'checkout') {
    include 'views/checkout.php';
} elseif ($page === 'login') {
    include 'views/login.php';
} elseif ($page === 'logout') {
    User::logout();
    header('Location: index.php');
} else {
    include 'views/product_list.php';
}

include 'views/footer.php';
