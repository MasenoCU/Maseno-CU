<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/public/assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" href="/public/assets/styles/style.css">
    <!-- page title -->
    <title>Evangelistic Teams Maseno University Christian Union</title>
    <link rel="icon" type="image/x-icon" href="/public/assets/images/favicon.ico">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/public/assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <style>
    .bg-container {
        background-image: url('/public/assets/images/bgteams.jpg');
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
        padding: 30px;
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
    
    <!-- header -->
    <?php require_once "../models/header.php"; ?>
    <section id="teams" class="py-5">
        <div class="container bg-container">


            <div class="container-xl md-4 align-content-center align-items-center">

                <div class="p-2 text-center bg-body-tertiary rounded-3 blur-bg">
                    <img src="/public/assets/images/teams.jpg" alt="hero bg" class="img-fluid"
                        style="max-width: 100px; height: auto; border-radius: 50%;">

                    <h1 class="text-body-emphasis">
                        <div class="display-4">Spreading God's Word</div>
                    </h1>
                    <p class="col-lg-8 mx-auto fs-5 text-muted">
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

    <!-- footer -->
    <?php require_once "../models/footer.php"; ?>

    <!-- main js -->
    <script src="/public/assets/scripts/main.js"></script>
    <!-- bootstrap JS -->
    <script src="/public/assets/scripts/bootstrap.bundle.min.js"></script>

</body>

</html>