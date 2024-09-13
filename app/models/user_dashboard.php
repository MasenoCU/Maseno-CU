<?php
require_once "../../config.php";
require_once "coming-soon-modal.php";
?>
<head>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../public/assets/styles/user_dashboard.css">
    <script src="../../public/assets/scripts/color-modes.js"></script>
    <link rel="stylesheet" href="../../public/assets/styles/comingsoon.css">
</head>
<div class="dashboard-container container-xxl">
    <div class="row">
        <!-- Sidebar or navigation area for quick links -->
        <div class="sidebar col-md-3 col-lg-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-content="default-content">Overview</a>
                </li>

                <!-- Blogs Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="read-blogs-content">Read Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="write-blog-content">Write Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="edit-blog-content">Edit Blog</a>
                        </li>
                    </ul>
                </li>

                <!-- Ministry Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Ministry</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link btn-readmore" href="#" data-content="my-ministry-content">My Ministry</a>
                        </li>
                    </ul>
                </li>

                <!-- Fellowship Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Fellowship</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="fellowship-content">Upcoming Fellowships</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="fellowship-resources-content">Fellowship Resources</a>
                        </li>
                    </ul>
                </li>

                <!-- Testimonials Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="read-testimonials-content">Read Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="write-testimonial-content">Write Testimonial</a>
                        </li>
                    </ul>
                </li>

                <!-- Prayer Requests Section -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Prayer Requests</a>
                    <ul class="nav flex-column submenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="view-prayer-requests-content">View Prayer Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="submit-prayer-request-content">Submit Prayer Request</a>
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
                </ol>
            </nav>

            <!-- Default content -->
            <div id="default-content" class="content-section">
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


            <!-- Placeholder sections for new content -->
            <div id="read-blogs-content" class="content-section d-none">
                <h2>Read Blogs</h2>
                <p>Here you can read blogs.</p>
            </div>

            <div id="write-blog-content" class="content-section d-none">
                <h2>Write a Blog</h2>
                <p>Write your blog here.</p>
            </div>

            <div id="edit-blog-content" class="content-section d-none">
                <h2>Edit Blogs</h2>
                <p>Edit your existing blogs here.</p>
            </div>

            <div id="my-ministry-content" class="content-section d-none">
                <h2>My Ministry</h2>
                <p>Details about the ministry you belong to.</p>
            </div>

            <div id="fellowship-content" class="content-section d-none">
                <h2>Upcoming Fellowships</h2>
                <p>Details about upcoming fellowships.</p>
            </div>

            <div id="fellowship-resources-content" class="content-section d-none">
                <h2>Fellowship Resources</h2>
                <p>Find fellowship resources here.</p>
            </div>

            <div id="read-testimonials-content" class="content-section d-none">
                <h2>Read Testimonials</h2>
                <p>Read the stories shared by others.</p>
            </div>

            <div id="write-testimonial-content" class="content-section d-none">
                <h2>Write Testimonial</h2>
                <p>Share your experience here.</p>
            </div>

            <div id="view-prayer-requests-content" class="content-section d-none">
                <h2>View Prayer Requests</h2>
                <p>View prayer requests submitted by others.</p>
            </div>

            <div id="submit-prayer-request-content" class="content-section d-none">
                <h2>Submit Prayer Request</h2>
                <p>Submit your prayer request here.</p>
            </div>
        </div>
    </div>
</div>

<?php include "coming-soon-modal.php"; ?>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../../public/assets/scripts/user_dashboard.js"></script>
