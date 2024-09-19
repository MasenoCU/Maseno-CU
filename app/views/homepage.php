<!-- <?php
session_start();

require_once "../../config.php";

if (!isset($_SESSION['username'])) {
    header("Location: registrationpage.php");
    exit;
}
?> -->

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/<?php echo BASE_URL; ?>assets/scripts/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Preston Maina">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Home</title>

    <link href="/<?php echo BASE_URL; ?>assets/styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="/<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css" rel="stylesheet">
    <link href="/<?php echo BASE_URL; ?>assets/styles/home.css" rel="stylesheet">
</head>

<body>

<?php 
require_once '../models/header.php';
?>

    <!-- Main Content -->
    <!-- <div class="container-xl main-content">
        <h2 class="display-4">Welcome to the Home Page</h2>
        <p class="lead">Welcome, <?php //echo htmlspecialchars($_SESSION['username']); ?>! This will be your dashboard.</p>
    </div> -->
 
    <!-- hero -->
    <section id="hero" style="height: 544px;">
        <div class="container-xl">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class=""></button>
                </div>

                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <!-- Welcome Back Slide -->
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>
                        <div class="display-2">Welcome Back to Maseno CU Community</div>
                    </h1>
                    <p class="lead text-muted">We are glad to have you as part of our community! Continue to grow in faith, engage in ministry, and make an impact.</p>
                    <p><a class="btn btn-md btn-warning" href="ministries.php" id="exploreMinistries">Explore Ministries</a></p>
                </div>
            </div>
        </div>

        <!-- Welcome to CU Slide -->
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption">
                    <h1>
                        <div class="display-2">Welcome to</div>
                        <div class="mobile-s d-sm-none display-6 text-muted">Maseno University Christian Union!</div>
                        <div class="content-to-hide-xs mobile-m d-md-none display-5 text-muted">Maseno University Christian Union!</div>
                        <div class="d-none d-md-block display-2 text-muted">Maseno University Christian Union!</div>
                    </h1>
                    <p class="lead mt-2 mb-1 text-muted">We are a group of committed young men and women living for God and pursuing a holy life.</p>
                    <p class="lead mt-0 text-muted">Continue your journey of faith with us.</p>
                    <p><a class="btn btn-md btn-outline-success border-2" href="about.php" id="learnmore">Learn More</a></p>
                </div>
            </div>
        </div>
        <!-- Get Involved Slide -->
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>
                        <div class="display-2">Get Involved and Make a Difference</div>
                    </h1>
                    <p class="lead text-muted">Engage in our ministries and evangelistic teams to make a positive impact for Christ.</p>
                    <p><a class="btn btn-md btn-primary" href="#contact" id="contactus">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- history & growth -->
    <section id="history">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <h2>
                    <div class="d-none d-md-block d-lg-none display-4 text-center">A Legacy of Growth and Faith</div>
                </h2>
                <div class="col-md-6 text-center text-md-start">
                    <h2>
                        <div class="d-md-none d-lg-block display-4 text-center">A Legacy of Growth and Faith</div>
                    </h2>
                    <p class="my-2 text-muted">Since its inception in 1978, the Maseno University Christian Union has
                        experienced remarkable growth, becoming a vibrant community of believers dedicated to living for
                        God
                        and pursuing a holy life. With a rich history and a strong
                        foundation in discipleship, the Christian Union continues to impact lives and maintain stability
                        in
                        Christian faith.</p>
                    <a href="about.php" class="btn btn-outline-success btn-md ms-auto mb-2 border-2">Learn
                        More</a>
                </div>
                <div class="col-md-6 text-center">
                    <img class="img-fluid" src="/<?php echo BASE_URL; ?>assets/images/700x500.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- vision, mission, goals -->
    <section id="goals&objectives">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <h2>
                    <div class="display-4 text-center">Living for God, Pursuing a Holy Life
                    </div>
                </h2>
                <p class="my-4 lead text-muted text-center">
                    At Maseno University Christian Union, our core values revolve around living for God and pursuing a
                    holy
                    life.
                </p>
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center align-items-center">
                    <div class="col justify-content-center">
                        <div class="text-center">
                            <svg class="bi text-body-secondary" width="64" height="64">
                                <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#eye"></use>
                            </svg>
                        </div>
                        <h2>
                            <div class="display-6 text-center">Our Vision</div>
                        </h2>
                        <p class="text-muted text-center">
                            Living as True Disciples of Jesus Christ.
                        </p>
                    </div>
                    <div class="col ">
                        <div class="text-center">
                            <svg class="bi text-body-secondary" width="64" height="64">
                                <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#rocket"></use>
                            </svg>
                        </div>
                        <h2>
                            <div class="display-6 text-center">Our Mission</div>
                        </h2>
                        <p class="text-muted text-center">
                            Nurturing belief in Christ & Developing Christ-like character.
                        </p>
                    </div>
                    <div class="col ">
                        <div class="text-center">
                            <svg class="bi text-body-secondary" width="64" height="64">
                                <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#bullseye"></use>
                            </svg>
                        </div>
                        <h2>
                            <div class="display-6 text-center">Our Goals</div>
                        </h2>
                        <p class="text-muted text-center">
                            Discipleship, Evangelism & Leadership Development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- benefits -->
    <section id="benefits">
        <div class="container-xl ">
            <div class="row justify-content-center align-items-center">
                <h2>
                    <div class="d-none d-md-block d-lg-none display-4 text text-center">Experience Spiritual Growth and
                        <span class="text-body-secondary">Community Support</span>
                    </div>
                </h2>
                <div class="col-md-7 text-center text-md-start order-md-2">
                    <h2>
                        <div class="d-md-none d-lg-block display-4">Experience Spiritual Growth and <span
                                class="text-body-secondary">Community Support</span>
                        </div>
                    </h2>
                    <p class="my-2 text-muted ">Joining the Maseno University Christian Union offers a unique
                        opportunity to
                        experience spiritual growth and find support within a vibrant community of like- minded
                        individuals.
                        Through engaging in various ministries and evangelistic teams, you will have the chance to
                        deepen
                        your faith, build lasting relationships, and make a positive impact on campus and beyond.</p>
                    <a href="#contact " class="btn btn-outline-secondary btn-sm ms-2 mb-2 border-2 ">Get in touch</a>
                </div>
                <div class="col-md-5 text-center order-md-1">
                    <img class="img-fluid" src="/<?php echo BASE_URL; ?>assets/images/700x500.png" alt=" ">
                </div>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- blogs & testimonies -->
    <section id="testimonials">
        <div class="container-xl">
            <h2>
                <div class="display-4 text-start">Real Stories From Members</div>
            </h2>
            <p class="my-4 lead text-muted text-start">
                Read the latest blog posts for insights and testimonies.
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php foreach ($blogs as $blog): ?>
                <div class="col">
                    <div class="card border-0 h-100">
                        <img src="<?php echo htmlspecialchars($blog['image_url'], ENT_QUOTES, 'UTF-8'); ?>"
                            class="card-img-top" alt="...">
                        <div class="card-body p-2">
                            <p class="bg-secondary text-white d-inline">
                                <small><?php echo htmlspecialchars($blog['category'], ENT_QUOTES, 'UTF-8'); ?></small>
                            </p>
                            <h5 class="card-title"><?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?>
                            </h5>
                            <p class="card-text text-muted">
                                <?php echo htmlspecialchars($blog['summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                        <div class="card-footer">
                            <img src="<?php echo htmlspecialchars($blog['author_image_url'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="w-25 me-3 rounded float-start" alt="...">
                            <p><small><?php echo htmlspecialchars($blog['author_name'], ENT_QUOTES, 'UTF-8'); ?></small>
                            </p>
                            <p class="text-muted">
                                <small><?php echo htmlspecialchars($blog['date'], ENT_QUOTES, 'UTF-8'); ?>
                                    ~ <?php echo htmlspecialchars($blog['read_time'], ENT_QUOTES, 'UTF-8'); ?> min
                                    read</small>
                            </p>
                            <p class="mb-0 d-inline"><a class="icon-link icon-link-hover"
                                    style="--bs-link-hover-color-rgb: 0, 166, 81;"
                                    href="/app/views/blogs.php#">Read more<svg class="bi" aria-hidden="true">
                                        <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#arrow-bar-right"></use>
                                    </svg></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- resources -->
    <section id="E-Library">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <div class="text-center">
                    <h2>
                        <div class="display-4">Discover New Faith Resources</div>
                    </h2>
                    <p class=" lead text-muted">Explore our collection of faith building materials.</p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
                    <div class="col">
                        <div class="card h-100 border-success">
                            <div class="card-header border-success">
                                <h6 class="card-subtitle text-body-secondary">Faith</h6>
                            </div>
                            <img src="/<?php echo BASE_URL; ?>assets/images/ebook_placeholder.jpg" class="card-img-top img-fluid"
                                style="height: auto;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Growing in Faith</h5>
                                <p class="card-text text-muted">Discover practical insights and tips to strengthen your
                                    faith.</p>
                            </div>
                            <div class="card-footer border-success">
                                <small class="text-body-secondary">
                                    <a href="#resources" class="card-link ">Read</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-success">
                            <div class="card-header border-success">
                                <h6 class="card-subtitle text-body-secondary ">Inspiration</h6>
                            </div>
                            <img src="/<?php echo BASE_URL; ?>assets/images/ebook_placeholder.jpg" class="card-img-top img-fluid"
                                style="height: auto;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">Finding Inner Peace</h5>
                                <p class="card-text text-muted">Discover the path to inner peace and contentment.
                                </p>
                            </div>
                            <div class="card-footer border-success">
                                <small class="text-body-secondary">
                                    <a href="#resources" class="card-link ">Read</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card h-100 border-success">
                            <div class="card-header border-success">
                                <h6 class="card-subtitle text-body-secondary ">Testimonials</h6>
                            </div>
                            <img src="/<?php echo BASE_URL; ?>assets/images/ebook_placeholder.jpg" class="card-img-top img-fluid"
                                style="height: auto;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Life Changing Stories</h5>
                                <p class="card-text text-muted">Read inspiring stories of transformation and faith.</p>
                            </div>
                            <div class="card-footer border-success">
                                <small class="text-body-secondary">
                                    <a href="#resources" class="card-link ">Read</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#resources" class="btn col-3 col-lg-1 btn-success btn-sm mt-3">View all</a>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- events -->
    <section id="events">
        <!-- tab navigation -->
        <div class="container-xl justify-content-center align-items-center">
            <div class="text-start">
                <h2>
                    <div class="display-4">Upcoming Events</div>
                </h2>
                <p class="lead text-muted">Stay updated on the latest events and meetings happening at Maseno University
                    Christian Union.</p>
            </div>
        </div>
        <!-- I-frame for events -->
        <iframe src="../models/events.php" title="Events"></iframe>
    </section>
    <hr class="featurette-divider">

    
    <!-- leadership -->
    <section>
        <div class="container-xl">
            <div class="text-center">
                <h2>
                    <div class="display-4">Meet Our Team</div>
                </h2>
                <p class="lead text-muted mb-16">Get to know the dedicated leaders of our Christian Union.</p>
            </div>
        </div>
        <!-- i-frame -->
        <iframe src="../models/leadership.php" title="Events"></iframe>
        <div class="row justify-content-center align-items-center">
            <a href="leadership.php" target="_parent" rel="noreferrer"
                class="btn col-auto btn-success btn-sm mt-3">Meet
                them all</a>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- FAQs -->
    <section id="FAQs">
        <div class="container-xl">
            <div class="text-start">
                <h2>
                    <div class="display-4">FAQs</div>
                </h2>
                <p class="lead text-muted">Find answers to frequently asked questions about the Maseno University
                    Christian
                    Union and membership.</p>
            </div>
            <div class="row my-4 justify-content-around align-items-center">
                <div class="text-center col-6 col-lg-4 mb-2">
                    <svg class="bi text-body-secondary" width="64" height="64">
                        <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#person?"></use>
                    </svg>
                </div>
                <div class="col-lg-8">
                    <!-- Accordion -->
                    <div class="accordion" id="questions">
                        <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-<?php echo $index; ?>">
                                <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#question<?php echo $index; ?>"
                                    aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                    aria-controls="question<?php echo $index; ?>">
                                    <?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?>
                                </button>
                            </h2>
                            <div id="question<?php echo $index; ?>"
                                class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>"
                                aria-labelledby="heading-<?php echo $index; ?>" data-bs-parent="#questions">
                                <div class="accordion-body">
                                    <?php echo nl2br(htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8')); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="text-start">
                <h3>Still have questions?</h3>
                <p class="text-muted">Contact us for more information or assistance.</p>
                <a href="#contact" class="btn btn-outline-secondary btn-md ms-2 mb-2 border-2 ">Contact Us</a>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- CTA -->
    <section id="cta">
        <!-- jumbotron -->
        <div class="container-xl md-4 align-content-center align-items-center">
            <div class="p-2 text-center rounded-3 home-cta">
                <svg class="bi mt-4 mb-3" width="70" height="62">
                    <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#mucu" />
                </svg>
                <h1 class="text-body-emphasis">
                    <div class="display-4">Feel at the feet of Jesus</div>
                </h1>
                <p class="col-lg-8 mx-auto fs-5 text-muted">
                    As a part of the Christian Union, continue to nurture your faith and make an impact through our ministries and evangelistic teams.
                    Let’s walk this journey of faith together.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container-xl justify-content-center align-items-center">
            <div class="text-start">
                <h2>
                    <div class="display-5">Contact Information</div>
                </h2>
                <p class="my-4 lead text-muted">Have a question or want to join? Get in touch with us.</p>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center align-content-center">
                <div class="col-auto col-lg-4">
                    <?php foreach ($contacts as $contact) : ?>
                    <?php if ($contact['contactType'] == 'Email') : ?>
                    <div class="text-start">
                        <h5>Email</h5>
                        <p class="mb-0">Send us an email</p>
                        <p><small><a href="mailto:<?= $contact['contactDetail'] ?>"
                                    class="contact-link"><?= $contact['contactDetail'] ?></a></small></p>
                    </div>
                    <?php elseif ($contact['contactType'] == 'PhoneNumber') : ?>
                    <div class="text-start">
                        <h5>Phone</h5>
                        <p class="mb-0">Give us a call</p>
                        <p><small><a href="tel:<?= $contact['contactDetail'] ?>"
                                    class="contact-link"><?= $contact['contactDetail'] ?></a></small></p>
                    </div>
                    <?php elseif ($contact['contactType'] == 'Address') : ?>
                    <div class="text-start">
                        <h5>Visit Us</h5>
                        <p class="mb-0"><?= $contact['contactDetail'] ?></p>
                        <p><small><a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;"
                                    href="https://maps.google.com/maps/dir//lecture+hall+15+XJW3%2B7R3+Maseno/@-0.0043532,34.6045384,19z/data=!4m5!4m4!1m0!1m2!1m1!1s0x182aa9fb91ce4dc5:0xc37f7341e6b2549d">Get
                                    directions</a></small></p>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col-auto col-lg-8">
                    <iframe title="Pin on LH15" class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.7272886660101!2d34.604589600000004!3d-0.0042575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa9fb91ce4dc5%3A0xc37f7341e6b2549d!2slecture%20hall%2015!5e0!3m2!1sen!2ske!4v1717702928110!5m2!1sen!2ske"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>   

<?php 
require_once '../models/footer.php';
require_once "../models/coming-soon-modal.php";
?>   
    <!-- main js -->
    <script src="/<?php echo BASE_URL; ?>assets/scripts/main.js"></script>
    <!-- bootstrap JS -->
    <script src="/<?php echo BASE_URL; ?>assets/scripts/bootstrap.bundle.min.js"></script>
</body>

</html>
