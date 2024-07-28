<?php
session_start(); // Ensure session is started
include 'includes/db.php'; // Include database connection

// Initialize the username variable
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : "Guest";

// Initialize or get terminal output history
if (!isset($_SESSION['terminal_output'])) {
    $_SESSION['terminal_output'] = "";
}

// Check if user is logged in
$isLoggedIn = isset($_SESSION['username']) && !empty($_SESSION['username']);

// Process command input only if user is logged in
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $isLoggedIn) {
    $command = trim($_POST['command']);
    $output = "";

    if (strpos($command, 'echo ') === 0) {
        $textToEcho = substr($command, 5); // Get the text after 'echo '
        $output = htmlspecialchars($textToEcho);
    } elseif ($command === 'clear') {
        $output = ""; // Clear the terminal output
        $_SESSION['terminal_output'] = ""; // Clear the stored output
    } else {
        $output = "Unknown command: $command";
    }

    // Append new output to terminal history
    $_SESSION['terminal_output'] .= "> $output<br>";
}

// Prepend welcome message to terminal history
$welcomeMessage = "> Welcome, $username!<br>";
$terminalOutput = $welcomeMessage . $_SESSION['terminal_output'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>./console</title>
    <link rel="stylesheet" href="/phpBlog/assets/css/style.css">
    <link rel="stylesheet" href="/phpBlog/assets/css/terminal.css"> <!-- Link to the new stylesheet -->
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="content">
        <div class="console-container">
            <pre class="console-output">
> Initializing system...
Loading core module Athena — 100% secured divine wisdom.
Establishing DB connection — 100%
<?php echo $terminalOutput; ?>
            </pre>

            <?php if ($isLoggedIn): ?>
                <div class="console-input-container">
                    <form class="console-form" method="post">
                        <input type="text" name="command" class="console-input" placeholder="Type your command here..." autofocus required>
                    </form>
                </div>
            <?php else: ?>
                <p class="login-required">You must be logged in to enter commands.</p>
            <?php endif; ?>
        </div>

        <div class="help-container">
            <h2>Available Commands</h2>
            <div class="help-text">
                <p>Command Reference:</p>
                <pre><code>echo [text] — Displays the specified text.</code></pre>
                <pre><code>clear — Clears the terminal output.</code></pre>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
