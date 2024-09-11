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
    <!-- custon css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/style.css">
    <!-- page title -->
    <title>Gallery Maseno University Christian Union</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>
    <!-- header -->
    <?php include"../models/header.php"; ?>

    <!-- hero -->
    <section id="hero">
        <!--from CET 'inspiring' or captured layouts or fullscreen image sliders -->
        <div class="container-xl">
            <div class="row">
                <h1 class="display-4 text-center">Capturing Beautiful Moments</h1>
                <p class="lead text-center">Browse through our gallery to relive the memorable events and activities of
                    the Christian Union</p>
            </div>
            <div class="row"><img src="<?php echo BASE_URL; ?>assets/images/Slider Image.png" alt="" class="img-fluid"></div>
        </div>
    </section>
    
    <!-- Friday Pictorials -->
    <section id="FridayPictorials">
        <div class="container-xl"></div>
    </section>
    
    <!-- Sunday Pictorials -->
    <section id="SundayPictorials">
        <div class="container-xl"></div>
    </section>
    
    <!-- Prayer Kesha Pictorials -->
    <section id="PrayerKeshaPictorials">
        <div class="container-xl"></div>
    </section>
    
    <!-- Worship Experience Pictorials -->
    <section id="WorshipExperiencePictorials">
        <div class="container-xl"></div>
    </section>
    
    <!-- Charity Events -->
    <section id="CharityEvents">
        <div class="container-xl"></div>
    </section>
    
    <!-- Fun Days -->
    <section id="FunDays">
        <div class="container-xl"></div>
    </section>
    
    <!-- Conferences -->
    <section id="Conferences">
        <div class="container-xl"></div>
    </section>

    <!-- footer -->
    <?php include"../models/footer.php"; ?>

    <!-- main js -->
    <script src="<?php echo BASE_URL; ?>assets/scripts/main.js"></script>
    <!-- bootstrap JS -->
    <script src="<?php echo BASE_URL; ?>assets/scripts/bootstrap.bundle.min.js"></script>

</body>

</html>