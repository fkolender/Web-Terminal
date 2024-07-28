<?php
session_start(); // Start the session
include 'includes/db.php'; // Include database connection

// Initialize the username variable
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : "User";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>./console</title>
    <link rel="stylesheet" href="/phpBlog/assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="content">
        <h1>./phpBlog</h1>
        <pre><code>
> Initializing system...
Loading core module Athena — 100% secured divine wisdom.
Establishing DB connection — 100%
> echo "A fierce wind blew from the south."
A fierce wind blew from the south.
<?php
// Display welcome message with the logged-in username
echo "> Welcome, $username!";
?><br>
> <span class="cursor">|</span>
        </code></pre>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
