<?php
require 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Connection</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="content">
        <h2>Test Connection</h2>
        <?php
        if ($conn->connect_error) {
            echo "<p class='error'>Connection failed: " . $conn->connect_error . "</p>";
        } else {
            echo "<p class='success'>Connected successfully to the phpblog database.</p>";
        }
        ?>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
