<?php
require 'components/db_connection.php';
require 'components/authenticate.php';

use MongoDB\Exception\Exception as MongoDBException;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        if ($database) {
            //database is taken  as an argument, to check if conection established from db_connection
            $collection = $database->selectCollection('Users');
            $user = $collection->findOne(['username' => $username]);
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['username'] = $username;
                // Redirect to home page
                header("Location: homepage.php");
                exit;
            } else {
                echo "<p>Invalid username or password. <a href='login.php'>Try again</a></p>";
            }
        } else {
            echo "<p>Invalid username or password. <a href='login.php'>Try again</a></p>";
        }
    } catch (MongoDBException $e) {
        /** @var \Throwable $e */
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
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
    <p>Don't have an account? <a href="../signup.php">Sign up here</a></p>
</body>

</html>