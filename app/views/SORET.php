<?php
session_start();
// Include the database connection
require_once "../models/db_connection.php";

// Calling the function to fetch eveteam data
$team_name = "SORET";
$team = fetchEveTeamData($connection, $team_name);

if (!$team) {
    echo "No content for SORET.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About SORET - Maseno</title>

    <script src="/public/assets/scripts/color-modes.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/assets/styles/style.css">
    <link rel="stylesheet" href="/public/assets/styles/cet-styles.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <style>
    .trapezium-wrapper {
        width: 100%; 
        height: 300px;
        overflow: hidden;
        display: inline-block;
    }

    .trapezium {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }
    
    .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }
    </style>
</head>
<body>

    <!-- Header -->
    <?php include("../models/header.php"); ?>

    <main>
        <!-- Hero Section -->
        <section class="container mt-5 evteam">
            <div class="row py-4">
                <div class="jumbotron link-body-emphasis animate__animated animate__fadeInUp">
                    <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                        <img src="/public/assets/images/ev-logo/<?php echo $team['team_logo']; ?>" alt="SORET Logo" class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                        <h1 class="display-4 text-secondary">About SORET</h1>
                    </div>
                    <p class="lead text-primary"><?php echo $team['history']; ?></p>
                    <hr class="my-4">
                    <p class="text-primary">SORET is a non-political, Non-tribal, non-profit making and non-denominational ministry committed to preaching the gospel within South Rift and beyond.</p>
                </div>
            </div>
        </section>
        <hr class="my-4 bg-tertiary">

        <!-- History Section -->
        <section class="about-section py-5 bg-tertiary mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-body-emphasis">
                        <h2>Our History</h2>
                        <p><?php echo $team['history']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-4 bg-tertiary">

        <!-- Values Section -->
        <section class="values-section py-5 link-body-emphasis">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <i class="bi bi-book-fill text-primary mb-3" style="font-size: 2rem;"></i>
                        <h3 class="text-secondary">Mandate</h3>
                        <p class="text-primary"><?php echo $team['mandate']; ?></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="bi bi-eye-fill text-primary mb-3" style="font-size: 2rem;"></i>
                        <h3 class="text-secondary">Vision</h3>
                        <p class="text-primary"><?php echo $team['vision']; ?></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="bi bi-globe2 text-primary mb-3 " style="font-size: 2rem;"></i>
                        <h3 class="text-secondary">Mission</h3>
                        <p class="text-primary"><?php echo $team['mission']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-4 bg-tertiary">

        <!-- Membership Section -->
        <section class="about-section py-5 bg-tertiary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-secondary">Membership</h2>
                        <p><?php echo $team['membership']; ?></p>
                    </div>
                    <div class="col-md-6 text-center">
                      <div class="trapezium-wrapper position-relative">
                        <img src="/public/assets/images/teamsbg.jpg" alt="Membership Image" class="img-fluid trapezium">
                        <div class="text-overlay">
                            <em>"<?php echo $team['motto']; ?>"</em>
                            <em><?php echo $team['motto_verse']; ?></em>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-4 bg-tertiary">

        <!-- Activities Section -->
        <section class="activities-section py-5 link-body-emphasis">
            <div class="container text-body-emphasis">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-secondary">Activities</h2>
                        <ul>
                            <?php 
                            $activities = explode(',', $team['activities']);
                            foreach ($activities as $activity) {
                                echo "<li>{$activity}</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <hr class="my-4 bg-tertiary">
    <!-- Footer -->
    <?php include("../models/footer.php"); ?>

    <!-- Main JS -->
    <script src="/public/assets/scripts/main.js"></script>
    <!-- Bootstrap JS -->
    <script src="/public/assets/scripts/bootstrap.bundle.min.js"></script>

</body>
</html>