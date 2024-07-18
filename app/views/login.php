<?php
require 'app/components/db_connection.php';
require 'app/components/authenticate.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        // Set session variables
        $_SESSION['username'] = $username;
        // Redirect to home page
        header("Location: homepage.php");
        exit;
    } else {
        echo "<p>Invalid username or password. <a href='login.php'>Try again</a></p>";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Maseno University Christian Union</title>
    <link rel="stylesheet" type="text/css" href="/public/assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/styles/bootstrap.min.css">
</head>

<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
</body>

</html>