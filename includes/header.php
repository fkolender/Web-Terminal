<?php
// No session_start() here
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : "Guest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="/phpBlog/assets/css/style.css">
    <style>
        /* Additional styles for the user display in the header */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #00ff00;
        }

        .user-display {
            background-color: #333;
            color: #00ff00;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header class="header-container">
        <nav>
            <ul>
                <li><a href="/phpBlog/index.php">Home</a></li>
                <li><a href="/phpBlog/login">Login</a></li>
                <li><a href="/phpBlog/logout">Logout</a></li>
                <li><a href="/phpBlog/signup">Signup</a></li>
                <li><a href="/phpBlog/test_connection">Test Connection</a></li>
            </ul>
        </nav>
        <div class="user-display">
            <?php echo "User: $username"; ?>
        </div>
    </header>
</body>
</html>
