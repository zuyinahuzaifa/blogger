<?php
// index.php

// Example PHP logic
$pageTitle = "Welcome to Future Skills";
$today = date("l, F j, Y");
?>

<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        main {
            padding: 2rem;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background: #222;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $pageTitle; ?></h1>
    </header>

    <main>
        <p>Today is <?php echo $today; ?>.</p>
        <p>Explore topics like future skills, sustainability, and innovation here!</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Future Skills Beyond AI</p>
    </footer>
</body>
</html>
