<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Console Style Page</title>
    <link rel = "stylesheet" href = "../phpBlog/assets/css/style.css">
</head>
<?php include 'includes/header.php'; ?>
<body>
    <div class = "content">
        <h1>./phpBlog</h1>
        <pre><code>
        > Initializing system...
        Loading core module Athena — 100% secured divine wisdom.
        Establishing DB connection — 100%
        > echo "A fierce wind blew from the south."
        A fierce wind blew from the south.
        <?php
            $username = "User";  // You can dynamically get this from a database or a session
            echo "> Welcome, $username!";?><br>
        > <span class = "cursor">|</span>

</code></pre>
<nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="/signup">Signup</a></li>
                <li><a href="/test_connection">Test Connection</a></li>
            </ul>
        </nav>
</div>
</body>
<?php include 'includes/footer.php'; ?>
</html>
