<?php
session_start();
require_once "../../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/style.css">
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <title>Thank You! Maseno University Christian Union</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        text-align: center;
        padding: 50px;
        background-color: #f0f0f0;
    }

    .thank-you-container {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        max-width: 600px;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .thank-you-message {
        font-size: 18px;
        color: #5cb85c;
    }

    .thank-you-link {
        display: block;
        margin-top: 20px;
        font-size: 16px;
        color: #007bff;
        text-decoration: none;
    }

    .thank-you-link:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="thank-you-container">
        <h1>Thank you for registering with us!</h1>
        <p class="thank-you-message">We will verify your details and an email will be sent to you with login instructions.</p>
        <a class="thank-you-link" href="registrationpage.php?mode=login">Login here</a>
    </div>
</body>

</html>