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
    <link rel="stylesheet" href="/public/assets/styles/comingsoon.css"> <!-- Core Stylesheet -->
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>

    <?php 
    require_once "../models/header.php";
    require_once "../models/db_connection.php";
    ?>

    <!-- ministries -->
    <section class="ministries">
        <div class="container">
            <h1 class="heading text-center my-4 display-4 fw-normal">MINISTRIES</h1>
            <div class="row g-4 justify-content-center">

                <?php foreach ($ministries as $ministry): ?>
                <div class="col-md-6 col-lg-4 p-3 d-flex justify-content-center">
                    <div class="card h-100 shadow-sm">
                        <div class="img-container">
                            <!-- Dynamically build the image path -->
                            <img src="/public/assets/images/<?php echo $ministry['image']; ?>" class="card-img-top" alt="<?php echo $ministry['name']; ?>">
                            <div class="overlay">
                                <p class="description"><?php echo $ministry['description']; ?></p>
                                <!-- Hardcode the page URL for each ministry -->
                                <a href="<?php echo strtolower(str_replace(' ', '-', $ministry['name'])); ?>-ministry.php" class="btn btn-primary btn-readmore">Read More</a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title"><?php echo $ministry['name']; ?></h3>
                            <p class="card-text fw-light"><?php echo $ministry['schedule']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <?php require_once "../models/footer.php"; ?>
    <?php require_once "../models/coming-soon-modal.php";?>

    <!-- main js -->
    <script src="/public/assets/scripts/main.js"></script>
    <!-- bootstrap JS -->
    <script src="/public/assets/scripts/bootstrap.bundle.min.js"></script>

</body>

</html>