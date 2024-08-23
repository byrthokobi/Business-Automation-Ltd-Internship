<!-- delete.php -->
<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Remove the user from the session
    if (isset($_SESSION['users'][$index])) {
        unset($_SESSION['users'][$index]);
    }

    // Update the cookie with the new session data
    setcookie('user_registry', serialize($_SESSION['users']), time() + (86400 * 30), "/"); // 30 days expiration
}

// Redirect back to the form page
header("Location: main.php");
exit();
?>
