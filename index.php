<?php
// Start the session
session_start();

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the values from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
    if ($username == "user1" && $password == "pass1") {
        // If the username and password are correct, set the username in the session
        $_SESSION['username'] = $username;

        // Redirect the user to the welcome page
        header("Location: welcome.php");
        exit;
    } elseif ($username == "user2" && $password == "pass2") {
        // If the username and password are correct, set the username in the session
        $_SESSION['username'] = $username;

        // Redirect the user to the welcome page
        header("Location: welcome.php");
        exit;
    } else {
        // If the username or password are incorrect, set an error message
        $error = "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>
    <?php if (isset($error)) {
        echo "<p>$error</p>";
    }
?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>