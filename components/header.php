<?php include("db_connection.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="../scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custon css -->
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/blog.css">
    <!-- page title -->
    <title>Maseno University Christian Union</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <!-- spinner -->

    <!-- SVG icons -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
          <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
          <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
        </symbol>
        <symbol id="chevron-left" viewBox="0 0 16 16">
            <title>chevron-left</title><g fill="#212121"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"></path></g>
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <title>chevron-right</title><g fill="#212121"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"></path></g>
        </symbol>
        <symbol id="arrow-bar-right" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
        </symbol>
    </svg>

    <!-- toggle theme -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
          <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
          <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
              Light
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
              Dark
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
              Auto
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
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

    <!-- main header -->
    <header id="header" class="sticky-top bg-body">
        <!-- navbar -->
        <div class="container-xxl d-flex flex-wrap align-items-center justify-content-around justify-content-sm-center">
            <!-- navbar-brand -->
            <a href="../index.php" class="nav col-lg-1 col-xl-auto navbar-brand d-flex flex-auto justify-content-center align-items-center mx-xl-auto mt-2 mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg width="40" height="32" xlmns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="white"/>
                <svg class="bi me-2" width="40" height="32"><use xlink:href="/assets/icons.svg#mucu"></use></svg>
                </svg><span class="ms-1 ms-lg-0 ms-xl-1 fw-bold" style="font-size: large;">MUCU</span>
            </a>
            <!-- more nav -->
            <div class="d-sm-none flex-shrink-0 dropdown mx-auto">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu text-small shadow">
                  <li><a class="dropdown-item" href="..leadership.php">Leadership</a></li>
                  <li><a class="dropdown-item" href="#">Noticeboard</a></li>
                  <li><a class="dropdown-item" href="#resources">Resources</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#reachout">Reach out</a></li>
                </ul>
            </div>
            <!-- mobile nav -->
            <div class="dropdown d-sm-none ms-5">
              <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg class="bi me-2" width="24" height="24"><use xlink:href="assets/icons.svg#menu" style="fill: currentColor; color:invert;"></use></svg>
              </a>
              <ul class="dropdown-menu text-small shadow" style="">
                <li><a class="dropdown-item active" href="index.php" aria-current="page">Home</a></li>
                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                <li><a class="dropdown-item" href="#">Services</a></li>
                <li><a class="dropdown-item" href="ministries.php">Ministries</a></li>
                <li><a class="dropdown-item" href="#">Evangelistic Teams</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                      <a class="dropdown-item icon-link disabled" style="--bs-link-hover-color-rgb: 25, 135, 84;">Online Giving
                          <svg class="bi" width="64" height="64"><use xlink:href="assets/icons.svg#give" style="fill: currentColor; color:invert;"></use></svg>
                      </a>
                  </li>
              </ul>
            </div>
            <!-- navbar links -->
            <nav class="p-0 mb-1 mt-xl-2 mx-xl-auto border rounded navbar-expand-sm bg-primary" data-bs-theme="auto">
                <div class="collapse navbar-collapse">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="nav-item"><a href="index.php" class="nav-link px-2 link-body-emphasis active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link px-2 link-body-emphasis">About Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 link-body-emphasis">Services</a></li>
                        <li class="nav-item"><a href="ministries.php" class="nav-link px-2 link-body-emphasis">Ministries</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 link-body-emphasis">Evangelistic Teams</a></li>
                        <li class="nav-item">
                            <a href="#" class="p-2 nav-link icon-link link-body-emphasis" style="--bs-link-hover-color-rgb: 25, 135, 84;">Online Giving
                              <svg class="bi" width="64" height="64"><use xlink:href="assets/icons.svg#give" style="fill: currentColor; color:invert;"></use></svg>
                            </a>
                        </li>
                        <li class="nav-item d-none d-sm-inline dropdown text-end">
                            <a href="#" class="nav-link d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              More
                            </a>
                            <ul class="dropdown-menu text-small">
                              <li><a class="dropdown-item" href="..leadership.php">Leadership</a></li>
                              <li><a class="dropdown-item" href="#">Noticeboard</a></li>
                              <li><a class="dropdown-item" href="#resources">Resources</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#reachout">Reach Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- bs search -->
            <form class="col-10 col-lg-auto mx-lg-4 mx-xl-auto mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <!-- cta section -->
            <div class="col-xl-auto mx-lg-4 mx-xl-auto d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center my-2">
                <div class="text-end">
                    <button type="button" class="btn btn-outline-primary mx-2" onclick="window.location.href='registrationpage.php'">Login</button>
                    <button type="button" class="btn btn-warning ms-2" onclick="window.location.href='registrationpage.php'" >Sign-up</button>
                </div>
            </div>
        </div>
    </header>