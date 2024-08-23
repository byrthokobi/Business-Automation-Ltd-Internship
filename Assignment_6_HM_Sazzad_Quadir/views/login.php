<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User($username, $password);

    if ($user->authenticate()) {
        header('Location: index.php');
        exit;
    } else {
        echo "<p>Invalid credentials, please try again.</p>";
    }
}
?>

<h2>Login</h2>
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
