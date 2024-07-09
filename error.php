<?php
// error.php

// Retrieve the message from the query parameter
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'Some error occurred, please try again after some minutes';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f0f0f0;
        }
        .error-container {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .error-message {
            font-size: 18px;
            color: #d9534f;
        }
        .error-link {
            display: block;
            margin-top: 20px;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }
        .error-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error</h1>
        <p class="error-message"><?php echo $message; ?></p>
        <a class="error-link" href="homepage.php">Go back to the homepage</a>
    </div>
</body>
</html>
