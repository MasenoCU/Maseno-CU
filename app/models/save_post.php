<?php
require_once "../../config.php"; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    // Insert post into the database
    $stmt = $connection->prepare("INSERT INTO posts (title, category, content, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $title, $category, $content);

    if ($stmt->execute()) {
        header("Location: ../../views/dashboard.php?success=true");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
