<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/<?php echo BASE_URL; ?>assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/style.css">
    <!-- page title -->
    <title>Evangelistic Teams Maseno University Christian Union</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <style>
        .bg-container {
            background-image: url('/public/assets/images/teamsbg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
        }

        .blur-bg {
            background: rgba(116, 114, 114, 0.001);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
        }

        .impact-section {
            border-radius: 10px;
            transition: box-shadow 0.3s;
            margin-bottom: 20px;
        }

        .impact-section:hover {
            box-shadow: 0 4px 20px rgba(235, 231, 231, 0.1);
        }

        .impact-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .impact-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #d0d1d3;
        }

        .icon-box {
            text-align: center;
            padding: 20px;
        }

        .icon-box i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #17a2b8;
        }

        .icon-box h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .buttons {
            margin-top: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {

            border: none;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .img-fluid {
            border-radius: 10px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        @media (max-width: 767.98px) {
            .impact-section h1 {
                font-size: 1.5rem;
            }

            .impact-section p {
                font-size: 0.9rem;
            }

            .icon-box h4 {
                font-size: 1.2rem;
            }

            .icon-box p {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- spinner -->

    <!-- SVG icons -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
        <symbol id="chevron-left" viewBox="0 0 16 16">
            <title>chevron-left</title>
            <g fill="#212121">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0">
                </path>
            </g>
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <title>chevron-right</title>
            <g fill="#212121">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708">
                </path>
            </g>
        </symbol>
        <symbol id="arrow-bar-right" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
        </symbol>
    </svg>

    <!-- toggle theme -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <!-- Major ongoing/upcoming events display -->
    <div class="container-xxl h-100 d-none">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="bg-info h-100 d-flex text-center justify-content-center align-items-center">
                    <!-- Upcoming/Ongoing Events Countdown -->
                    <div class="d-flex align-items-center">
                        <p class="m-2 lead fw-bold">Commission Conference 2024:</p>
                        <div class="events-cd" data-countdown="2024/12/27"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    require_once "../models/header.php";
    require_once "../models/db_connection.php";
    ?>

    <!-- hero -->
    <section id="teams" class="py-5">
        <div class="container bg-container">
            <div class="container-xl md-4 align-content-center align-items-center">
                <div class="p-2 text-center bg-body-tertiar rounded-3 blur-bg">
                    <img src="/public/assets/images/teams.jpg" alt="Description" class="img-fluid"
                        style="max-width: 100px; height: auto; border-radius: 50%;">

                    <h1 class="text-white">
                        <div class="display-4">Spreading God's Word</div>
                    </h1>
                    <p class="col-lg-8 mx-auto fs-5 text-white">
                        Discover the Evangelistic Teams of Maseno University Christian Union, dedicated to spreading the
                        Gospel.
                    </p>
                    <div class="d-inline-block text-center text-md-start">
                        <a href="#" id="joinus" class="btn btn-warning btn-md my-2 ms-1 rounded-pill">Join today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col text-center">
            <h2>Our Teams</h2>
        </div>
    </div>

    <section id="teams" class="py-6">

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">



        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container-fluid mt-5 px-4">
            <div class="row">
                <div class="col">
                    <div class="impact-section">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                                <img src="/public/assets/images/UET LOGO.png" alt="UET logo"
                                    class="rounded-circle mb-3 mb-md-0" width="50" height="50">
                                <div class="col-md-8" style="padding-left: 30px;">
                                    <h1>Uttermost Evangelistic Team (UET)</h1>
                                    <p>Uttermost Evangelistic Team (UET) is an organization registered under the
                                        societies Act with a mandate of preaching the Gospel of Jesus Christ in Kenya
                                        and other Nations of the world. The organization has its headquarters in
                                        Machakos and has branches in 14 universities in Kenya for students and 3
                                        non-student branches in Nairobi, Machakos, Kitui counties and a fellowship in
                                        Makueni County.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0 icon-box">
                                <i class="fas fa-bullseye"></i>
                                <h4>Mission</h4>
                                <p>As a non-denominational ministry, UET is committed to prayerfully proclaim the gospel
                                    of Jesus Christ through preaching, training, mentoring, and implementation of
                                    community development initiatives in Kenya and beyond.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-hands-helping"></i>
                                <h4>Activities</h4>
                                <p>Organizing evangelistic outreaches, discipleship programs, and impactful community
                                    service initiatives.</p>
                            </div>
                        </div>
                        <div class="row buttons text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button type="button" class="btn btn-primary">Learn More</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>

        </div>




    </section>


    <?php require_once "../models/footer.php"; ?>
    <?php require_once "../models/coming-soon-modal.php"; ?>

</body>

</html>