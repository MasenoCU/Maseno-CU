<?php
require_once "../../config.php";
?>
<div class="dashboard-container container-xxl">
    <div class="row">
        <!-- Sidebar or navigation area for quick links -->
        <div class="col-md-3 col-lg-2 sidebar bg-light">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ministry Involvement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fellowship Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Prayer Requests</a>
                </li>
            </ul>
        </div>

        <!-- Main content area -->
        <div class="col-md-9 col-lg-10 main-content">
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
<script src="<?php echo BASE_URL; ?>assets/js/user_dashboard.js"></script>
