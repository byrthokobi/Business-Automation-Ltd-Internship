<!-- register.php -->
<?php
session_start();

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

// Create an array to store user data
$user = [
    'name' => $name,
    'email' => $email,
    'address' => $address
];

// Add user data to session
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$_SESSION['users'][] = $user;

// Store the session data in a cookie
setcookie('user_registry', serialize($_SESSION['users']), time() + (86400 * 30), "/"); // 30 days expiration

// Redirect back to the form page
header("Location: main.php");
exit();
?>
