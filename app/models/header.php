<?php
require_once "db_connection.php";
?>
    <!-- SVG icons -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <!-- Other SVG Symbols -->
    </svg>

    <!-- toggle theme -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <!-- Theme toggle dropdown -->
    </div>

    <!-- Major ongoing/upcoming events display -->
    <div class="container-xxl h-100 d-none">
        <!-- Events content -->
    </div>

    <!-- Main header -->
    <header id="header" class="sticky-top bg-body">
        <!-- Navbar -->
        <div class="container-xxl d-flex flex-wrap align-items-center justify-content-around justify-content-sm-center">
            <!-- Navbar brand -->
            <a href="../../public/index.php"
                class="nav col-lg-1 col-xl-auto navbar-brand d-flex flex-auto justify-content-center align-items-center mx-xl-auto mt-2 mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg width="40" height="32" xlmns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100%" fill="white" />
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="/public/assets/icons.svg#mucu"></use>
                    </svg>
                </svg><span class="ms-1 ms-lg-0 ms-xl-1 me-1 fw-bold" style="font-size: large;">MUCU</span>
            </a>

            <!-- Navbar links -->
            <nav class="p-0 mb-1 mt-xl-2 mx-xl-auto border rounded navbar-expand-sm bg-primary" data-bs-theme="auto">
                <div class="collapse navbar-collapse">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="nav-item"><a href="homepage.php" class="nav-link px-2 link-body-emphasis active"
                                aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link px-2 link-body-emphasis">About Us</a></li>
                        <li class="nav-item"><a href="fellowships.php" class="nav-link px-2 link-body-emphasis">Fellowships</a></li>
                        <li class="nav-item"><a href="ministries.php" class="nav-link px-2 link-body-emphasis">Ministries</a></li>
                        <li class="nav-item"><a href="eveteams.php" class="nav-link px-2 link-body-emphasis">Evangelistic Teams</a></li>
                        <li class="nav-item"><a href="leadership.php" class="nav-link px-2 link-body-emphasis">Leadership</a></li>
                        <li class="nav-item d-none d-sm-inline dropdown text-end">
                            <a href="#" class="nav-link d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">More</a>
                            <ul class="dropdown-menu text-small">
                                <li><a class="dropdown-item icon-link" href="../views/dashboard.php" >My Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item icon-link disabled">Online Giving</a></li>
                                <li><a class="dropdown-item" href="#">Noticeboard</a></li>
                                <li><a class="dropdown-item" href="#resources">Resources</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#reachout">Reach Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Search form -->
            <form class="col-10 col-lg-auto mx-lg-4 mx-xl-auto mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <!-- CTA Section -->
            <div class="col-xl-auto mx-lg-4 mx-xl-auto d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center my-2">
                <div class="text-end">
                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- Show Sign Out button if logged in -->
                        <a href="../models/logout.php" class="btn btn-outline-primary mx-2">Sign Out</a>
                    <?php else: ?>
                        <!-- Show Login and Sign-up buttons if not logged in -->
                        <a href="../views/registrationpage.php?mode=login" class="btn btn-outline-primary mx-2">Login</a>
                        <a href="../views/registrationpage.php?mode=signup" class="btn btn-warning ms-2">Sign-up</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
<script src="/public/assets/scripts/jquery.min.js"></script>
<script src="/public/assets/scripts/bootstrap.bundle.min.js"></script>
<script src="/public/assets/scripts/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
