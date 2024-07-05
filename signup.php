<?php
require 'components/db_connection.php';
require 'components/authenticate.php';

use MongoDB\Exception\Exception as MongoDBException;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $email = $_POST['email'];

    // Ensure the `Users` collection exists
    if ($database) {
        $collection = $database->selectCollection('Users');

        try {
            // Insert the new user into the `Users` collection
            $result = $collection->insertOne([
                'username' => $username,
                'password' => $password,
                'email' => $email,
            ]);

            if ($result->getInsertedCount() == 1) {
                echo "<p>Sign up successful! <a href='login.php'>Login here</a></p>";
            } else {
                echo "<p>Error: Failed to insert user.</p>";
                echo "<p><a href='signup.php'>Try again</a></p>";
            }
        } catch (MongoDBException $e) {
            /** @var \Throwable $e */
            echo "<p>Error: " . $e->getMessage() . "</p>";
            echo "<p><a href='signup.php'>Try again</a></p>";
        }
    } else {
        echo "<p>Error: Could not connect to the database.</p>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <h2>Sign Up</h2>
    <form action="signup.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>

</html>
