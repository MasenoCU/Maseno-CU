<?php
session_start();
require_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/<?php echo BASE_URL; ?>assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custon css -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/style.css">
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/fellowship.css">
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/calendar.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/swiper-bundle.min.css" />
    <!-- page title -->
    <title>Fellowships Maseno University Christian Union</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> -->
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Page Title -->
    <title>Fellowships Maseno University Christian Union</title>
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



    <?php include "../models/header.php"; ?>

    <!-- hero -->
    <section id="header">
        <div class="container-xl">
            <div class="row">
                <div class="col-auto col-md-6">
                    <h1 class="display-4">Join Our Community</h1>
                </div>
                <div class="col-auto col-md-6">
                    <p class="lead">Discover the power of fellowship and the impact of activities within the Maseno
                        University Christian Union. Engage with like-minded individuals, grow in faith, and achieve
                        maturity
                        in Christ.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="calendar">
        <div class="container-xl">
            <div class="container">
                <div class="left">
                    <div class="calendar bg-body">
                        <div class="month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">September 2024</div>
                            <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="days"></div>
                        <div class="goto-today">
                            <div class="goto">
                                <input type="text" placeholder="mm/yyyy" class="date-input" />
                                <button class="goto-btn">Go</button>
                            </div>
                            <button class="today-btn">Today</button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="today-date">
                        <div class="event-day">Sun</div>
                        <div class="event-date">15th September 2024</div>
                    </div>
                    <div class="events"></div>
                    <!-- Add Events -->
                    <!-- <div class="add-event-wrapper">
                        <div class="add-event-header">
                            <div class="title">Add Event</div>
                            <i class="fas fa-times close"></i>
                        </div>
                        <div class="add-event-body">
                            <div class="add-event-input">
                                <input type="text" placeholder="Event Name" class="event-name" />
                            </div>
                            <div class="add-event-input">
                                <input
                                    type="text"
                                    placeholder="Event Time From"
                                    class="event-time-from" />
                            </div>
                            <div class="add-event-input">
                                <input
                                    type="text"
                                    placeholder="Event Time To"
                                    class="event-time-to" />
                            </div>
                        </div>
                        <div class="add-event-footer">
                            <button class="add-event-btn">Add Event</button>
                        </div>
                    </div> -->
                </div>
                <!-- add event button -->
                <!-- <button class="add-event">
                    <i class="fas fa-plus"></i>
                </button> -->
            </div>

        </div>
    </section>

    <!-- ongoing/recent -->
    <section id="ongoing/recent">
        <div class="container-xl">
            <div>
                <h2 class="display-6">Most Recent</h2>
                <p class="lead">Re-live this fellowship experience</p>
            </div>
            <div class="row justify-content-lg-center align-items-lg-center">
                <div class="col-auto col-md-6">
                    <img src="/<?php echo BASE_URL; ?>assets/images/Video Placeholder.png" alt="" class="img-fluid">
                </div>
                <div class="col-auto col-md-6">
                    <h4 class="mb-2">Christianity and Technology</h4>
                    <h5>Featured Speaker</h5>
                    <img src="/<?php echo BASE_URL; ?>assets/images/Preston.jpeg" alt="speaker-profile" width="64" height="64"
                        class="rounded-circle">
                    <p class="text-muted mb-0">Preston Maina</p>
                    <ul class="nav mb-2">
                        <li class="nav-item mx-1"><a class="nav-link p-0"
                                href="https://www.linkedin.com/in/prestigious-preston" target="_blank"><svg
                                    class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/public/assets/icons/icons.svg#linkedin"></use>
                                </svg></a></li>
                        <li class="nav-item mx-1"><a class="nav-link p-0"
                                href="https://www.facebook.com/prestigious.preston" target="_blank"><svg
                                    class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/public/assets/icons/icons.svg#facebook"></use>
                                </svg></a></li>
                        <li class="nav-item mx-1"><a class="nav-link p-0" href="https://wa.me/qr/GDOUTSNGJIYMF1"
                                target="_blank"><svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/public/assets/icons/icons.svg#whatsapp"></use>
                                </svg></a></li>
                    </ul>
                    <a class="p-0 icon-link text-decoration-none link-body-emphasis" href="#" target="_blank">Share
                        <svg class="bi" width="20" height="20">
                            <use xlink:href="/public/assets/icons/icons.svg#share"
                                style="fill: currentColor; color:invert;"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- main fellowships -->
    <section id="main">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <h2>
                    <div class="display-5 text-center">Experience Meaningful Fellowship
                    </div>
                </h2>
                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                    <div class="col justify-content-center">
                        <div class="text-center">
                            <img src="/<?php echo BASE_URL; ?>assets/images/Medium Placeholder Image.png" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-center">Friday Fellowship</h4>
                        <p class="text-muted text-center">
                            Come join us on Fridays from 6:00pm to 8:00pm as we gather to worship, pray, and grow
                            together.
                        </p>
                    </div>
                    <div class="col ">
                        <div class="text-center">
                            <img src="/<?php echo BASE_URL; ?>assets/images/Medium Placeholder Image.png" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-center">Sunday Service</h4>
                        <p class="text-muted text-center">
                            Join us every Sunday from 7:00am-9:30am and 9:30am-12:00pm for a time of worship,
                            praise, teaching, and fellowship with fellow believers.
                        </p>
                    </div>
                    <div class="col ">
                        <div class="text-center">
                            <img src="/<?php echo BASE_URL; ?>assets/images/Medium Placeholder Image.png" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-center">Saturday Fellowship</h4>
                        <p class="text-muted text-center">
                            Join your <a href="evteams.php" class="text-decoration-none">EVE Team</a>
                            every Saturday for a vibrant gathering of believers, filled with uplifting worship,
                            inspiring
                            messages, and meaningful connections.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- mid-week fellowships -->
    <section id="mid-week">
        <div class="container-xl">
            <div class="row justify-content-center">
                <h2>
                    <div class="display-5 text-center">Our Mid-Week Meetings
                    </div>
                </h2>
                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                    <div class="col">
                        <div>
                            <img src="/<?php echo BASE_URL; ?>assets/images/Medium Placeholder Image.png" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-start">Ministry Fellowship</h4>
                        <p class="text-muted text-start">
                            Join the Sunday School and High School Ministries on Monday 6:00pm-7:00pm and the other
                            Ministries same time on Tuesday to grow in your calling.
                        </p>
                    </div>
                    <div class="col">
                        <div>
                            <img src="/<?php echo BASE_URL; ?>assets/images/Medium Placeholder Image.png" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-start">Wednesday Prayers & BS</h4>
                        <p class="text-muted text-start">
                            Join us every Wednesday 6:00pm-7:00pm for a powerful time of prayer and fasting. Experience
                            spiritual growth and renewal during the Bible Study from 7:00pm-8:00pm.
                        </p>
                    </div>
                    <div class="col">
                        <div>
                            <img src="/<?php echo BASE_URL; ?>assets/images/Medium Placeholder Image.png" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-start">Thursday BEST-P Session</h4>
                        <p class="text-muted text-start">
                            Join us every Thursday 7:00pm-8:00pm for the Bible Exposition Self Training Program
                            as we seek to understand the scriptures and correct interpretation of God's word.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- frequent events -->
    <section id="frequent events">
        <div class="container-xl">
            <div class="row">
                <h2 class="display-5 text-center section-heading">Frequent Events</h2>
                <p class="lead text-center section-subheading">More often than not</p>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Event -->
                    <div class="swiper-slide">
                        <div class="event-img">
                            <img class="img-fluid object-fit-cover" src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="text-dark mt-5">
                                <h4 class="eventname">Prayer Kesha</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Event -->
                    <div class="swiper-slide">
                        <div class="event-img">
                            <img class="img-fluid object-fit-cover" src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="text-dark mt-5">
                                <h4 class="eventname">Worship Experience</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Event -->
                    <div class="swiper-slide">
                        <div class="event-img">
                            <img class="img-fluid object-fit-cover" src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="text-dark mt-5">
                                <h4 class="eventname">Prayer Retreats</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Event -->
                    <div class="swiper-slide">
                        <div class="event-img">
                            <img class="img-fluid object-fit-cover" src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="text-dark mt-5">
                                <h4 class="eventname">Hikes</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Event -->
                    <div class="swiper-slide">
                        <div class="event-img">
                            <img class="img-fluid object-fit-cover" src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="text-dark mt-5">
                                <h4 class="eventname">Prayer Week</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Event -->
                    <div class="swiper-slide">
                        <div class="event-img">
                            <img class="img-fluid object-fit-cover" src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="event-content">
                            <div class="text-dark mt-5">
                                <h4 class="eventname">Mini Missions</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <!-- occasional events -->
    <section id="occasional-events">
        <div class="container-xl">
            <div class="row">
                <h2 class="display-5 text-center section-heading">Occasional Events</h2>
                <p class="lead text-center section-subheading">Once in a while</p>
            </div>
            <div class="swiper slider">
                <!-- events -->
                <div class="swiper-wrapper">
                    <!-- event 1-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">1</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Charity Event</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 2-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">2</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Ezra Conference</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 3-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">3</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Commission Conference</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 4-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">4</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Discipleship Weekend</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 5-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">5</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Fun Day</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 6-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">6</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Prayer Festival</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 7-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">7</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">AGM</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 8-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">8</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Inreach Week</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 9-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">9</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Meaga Mission</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 10-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">10</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Orientation Week</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 11-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">11</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Chastity Week</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 12-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">12</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Associates Weekend</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 13-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">13</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Elders Weekend</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 14-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">14</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">2nd Years Weekend</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- event 15-->
                    <div class="swiper-slide slide">
                        <div class="slide-img">
                            <img src="/public/assets/images/Placeholder Image.png" alt="event">
                        </div>
                        <div class="slide-content">
                            <h1 class="text-end me-5 text-secondary">15</h1>
                            <div class="slide-content-bottom text-dark">
                                <h2 class="event-name">Mini Elders Weekend</h2>
                                <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Rem,
                                    accusantium?</p>
                            </div>
                        </div>
                    </div>
                    <!-- end of events -->
                </div>
                <!-- controls -->
                <div class="slider-control">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include "../models/footer.php"; ?>

    <!-- Iconions -->
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
    <!-- Swiper JS -->
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <!-- Custom JS -->
    <script src="/<?php echo BASE_URL; ?>assets/scripts/fellowship.js"></script>
    <script src="/<?php echo BASE_URL; ?>assets/scripts/calendar.js"></script>

</body>

</html>