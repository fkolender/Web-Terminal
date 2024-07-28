<?php
session_start(); // Ensure session is started
include 'includes/db.php'; // Include database connection

// Initialize the username variable
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : "Guest";

// Initialize or get terminal output history
if (!isset($_SESSION['terminal_output'])) {
    $_SESSION['terminal_output'] = "";
}

// Process command input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $command = trim($_POST['command']);
    $output = "";

    if (strpos($command, 'echo ') === 0) {
        $textToEcho = substr($command, 5); // Get the text after 'echo '
        $output = htmlspecialchars($textToEcho);
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

            <form method="post">
                <input type="text" name="command" class="console-input" placeholder="Type your command here..." autofocus required>
            </form>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
