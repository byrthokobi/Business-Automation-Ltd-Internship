<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="register.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <input type="submit" value="Register">
    </form>
    <h1> habibi

    <h2>Registered Users</h2>
    <ul>
        <?php
        session_start();
        if (isset($_SESSION['users'])) {
            foreach ($_SESSION['users'] as $index => $user) {
                echo "<li>{$user['name']} ({$user['email']}) - {$user['address']} <a href='delete.php?index=$index'>Delete</a></li>";
            }
        } else {
            echo "<li>No registered users.</li>";
        }
        ?>
    </ul>
</body>
</html>
