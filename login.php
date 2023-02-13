<?php

// Start the session
session_start();

// Check if the session variable 'username' is set
// If it's not set, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Store the value of the session variable 'username' in a variable
$username = $_SESSION['username'];

// Check if the logout button has been pressed
if (isset($_POST['logout'])) {
    // Destroy the current session
    session_destroy();
    // Redirect to the login page
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
</head>

<body>
    <h1>Welcome Page</h1>
    <p>Welcome, <?php echo $username; ?>!</p>
    <form action="login.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>