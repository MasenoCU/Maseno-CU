<?php
session_start();

// Check if the user is logged in, if not redirect to first page registartion page
if (!isset($_SESSION['username'])) {
    header("Location: registrationpage.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div class="container">
        <h2>Welcome to the Home Page</h2>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! This is the home page.</p>
        <p><a href="index.php" class="logout-btn">Logout</a></p>
    </div>
</body>

</html>