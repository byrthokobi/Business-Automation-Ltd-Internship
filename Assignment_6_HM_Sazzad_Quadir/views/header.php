<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Basic E-Commerce Site</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="index.php?page=cart">Cart</a>
            <?php if (User::isLoggedIn()): ?>
                <a href="index.php?page=logout">Logout</a>
            <?php else: ?>
                <a href="index.php?page=login">Login</a>
            <?php endif; ?>
        </nav>
    </header>
