<?php
// Starting the session
session_start();

// Checking if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Blogger</title>
</head>
<body>
    <h2>Welcome to Your Dashboard!</h2>

    <p>Hello, <?php echo "admin"; ?>! You are successfully logged in.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
