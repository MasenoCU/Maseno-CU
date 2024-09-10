<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/public/assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" href="/public/assets/styles/style.css">
    <link rel="stylesheet" href="/public/assets/styles/ministries.css">
    <!-- page title -->
    <title>Ministries Maseno University Christian Union</title>
    <link rel="icon" type="image/x-icon" href="/public/favicon.ico">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/public/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/styles/comingsoon.css">
    <link rel="stylesheet" href="/public/assets/styles/dashboard1.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<?php require_once '../models/header.php';?>
<body>
<?php require_once '../models/user_dashboard.php'; ?>
<!-- main js -->
<script src="/public/assets/scripts/main.js"></script>
<!-- bootstrap JS -->
<script src="/public/assets/scripts/bootstrap.bundle.min.js"></script>
</body>
<?php
require_once '../models/footer.php';
?>
