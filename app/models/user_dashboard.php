<?php
require_once "../../config.php";
?>
<head>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../public/assets/styles/user_dashboard.css">
    <script src="../../public/assets/scripts/color-modes.js"></script>
</head>

<div class="dashboard-container container-xxl ">
    <div class="row">
        <!-- Sidebar or navigation area for quick links -->
        <div class="sidebar col-md-3 col-lg-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview</a>
                </li>

                <!-- Blogs Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Read Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Write Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Edit Blog</a>
                        </li>
                    </ul>
                </li>

                <!-- Ministry Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Ministry</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">View Ministries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Join a Ministry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Leave a Ministry</a>
                        </li>
                    </ul>
                </li>

                <!-- Fellowship Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Fellowship</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">View Upcoming Fellowships</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fellowship Details</a>
                        </li>
                    </ul>
                </li>

                <!-- Testimonials Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Read Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Write Testimonial</a>
                        </li>
                    </ul>
                </li>

                <!-- Prayer Requests Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Prayer Requests</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">View Prayer Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Submit Prayer Request</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>


        <!-- Main content area -->
        <div class="col-md-9 col-lg-10 main-content">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
            </nav>

            <div class="row mb-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Ministries Engaged</h5>
                            <p class="card-text display-4">5</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Events</h5>
                            <p class="card-text display-4">2</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Prayer Requests</h5>
                            <p class="card-text display-4">3</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed charts section -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ministry Participation Over Time</h5>
                            <!-- Insert a chart here -->
                            <canvas id="ministryChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Fellowship Attendance</h5>
                            <!-- Insert a chart here -->
                            <canvas id="fellowshipChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional content or widgets -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Activities</h5>
                            <ul>
                                <li>Joined "Youth Evangelistic Team" ministry.</li>
                                <li>Attended the "Prayer Breakfast" fellowship on 5th September 2024.</li>
                                <li>Submitted a prayer request.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../../public/assets/scripts/user_dashboard.js"></script>
