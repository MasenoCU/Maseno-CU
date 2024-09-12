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
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
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


<script>
// Handle the sidebar links and content toggling
document.addEventListener('DOMContentLoaded', function () {
    const submenuLinks = document.querySelectorAll('.submenu .nav-link');  // Select submenu links
    const contentSections = document.querySelectorAll('.content-section');  // All content sections
    const defaultContent = document.getElementById('default-content');  // The default content

    submenuLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();  // Prevent default link behavior
            const contentId = this.getAttribute('data-content');  // Get the data-content attribute

            // Hide all content sections
            contentSections.forEach(section => {
                section.classList.add('d-none');
            });

            // Show the selected content section
            const targetSection = document.getElementById(contentId);
            if (targetSection) {
                targetSection.classList.remove('d-none');
            }

            // Hide the default content
            defaultContent.classList.add('d-none');
        });
    });
});
</script>
