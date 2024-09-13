<?php
session_start();
require_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="<?php echo BASE_URL; ?>assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/ministries.css">
    <!-- page title -->
    <title>Ministries Maseno University Christian Union</title>
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>favicon.ico">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/comingsoon.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/user_dashboard.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<?php require_once '../models/header.php';?>
<body>
<?php require_once '../models/user_dashboard.php'; ?>
<!-- main js -->
<script src="<?php echo BASE_URL; ?>assets/scripts/main.js"></script>
<!-- bootstrap JS -->
<script src="<?php echo BASE_URL; ?>assets/scripts/bootstrap.bundle.min.js"></script>
</body>
<?php
require_once '../models/footer.php';
?>
