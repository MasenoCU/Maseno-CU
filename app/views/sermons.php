<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/public/assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custon css -->
    <link rel="stylesheet" href="/public/assets/styles/style.css">
    <link rel="stylesheet" href="/public/assets/styles/blog.css">
    <!-- page title -->
    <title>Sermons Maseno University Christian Union</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/public/assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>

    <!-- header -->
    <?php include"../models/header.php"; ?>

    <!-- hero -->
    <section id="hero">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <div class="col col-auto col-md-6">
                    <h1 class="display-5">Notable Fellowship Sessions: Inspiring Sermons and Speakers</h1>
                    <p class="lead">Experience the highlights from our impactful fellowship sessions, featuring key
                        speakers and powerful sermons that will inspire and uplift your spirit.</p>
                    <div class="row">
                        <div class="col col-auto col-md-6">
                            <h5>Key Speakers</h5>
                            <p class="text-mute">Listen to renown speakers as they share their wisdom and insights on
                                faith and spirituality</p>
                        </div>
                        <div class="col col-auto col-md-6">
                            <h5>Impactful Sermons</h5>
                            <p class="text-mute">Immerse yourself in powerful sermons that will deepen your
                                understanding of God's word.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-auto col-md-6"><img src="/public/assets/images/SermonContent.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Friday Fellowships -->
    <section id="FridayFellowships">
        <div class="container-xl"></div>
    </section>

    <!-- Sunday Services -->
    <section id="SundayServices">
        <div class="container-xl"></div>
    </section>

    <!-- Crusades -->
    <section id="Crusades">
        <div class="container-xl"></div>
    </section>

    <!-- Prayer Keshas -->
    <section id="PrayerKeshas">
        <div class="container-xl"></div>
    </section>

    <!-- Worship Experiences -->
    <section id="WorshipExperiences">
        <div class="container-xl"></div>
    </section>

    <!-- testimonials -->
    <section id="testimonials">
        <div class="container-xl"></div>
    </section>

    <!-- cta -->
    <section id="cta">
        <div class="container-xl">
            <div class="row">
                <div class="col col-auto col-md-6">
                    <h2 class="display-5">Stay Connected With Us</h2>
                </div>
                <div class="col col-auto col-md-6">
                    <p class="lead">Subscribe to our Youtube channel and follow us on Facebook to receive updates on new
                        fellowship recordings.</p>
                    <div class="d-inline-block text-center text-md-start">
                        <a href="http://www.youtube.com/@maseno_cu" target="_blank" id="youtube"
                            class="btn btn-warning btn-md my-2 ms-1 rounded-pill">Subscribe</a>
                        <a href="https://www.facebook.com/Masenocu/" target="_blank" id="facebook"
                            class="btn btn-outline-primary btn-md ms-1 border-1 rounded-pill">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include"../models/footer.php"; ?>

    <!-- main js -->
    <script src="/public/assets/scripts/main.js"></script>
    <!-- bootstrap JS -->
    <script src="/public/assets/scripts/bootstrap.bundle.min.js"></script>

</body>

</html>