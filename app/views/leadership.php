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
    <!-- page title -->
    <title>Leadership Maseno University Christian Union</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
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

    

    <?php include"../models/header.php"; ?> 

    <!-- hero -->
    <section id="hero">
        <div class="container-xl">
            <h2>
                <div class="display-4 text-center">Leading With A Purpose</div>
            </h2>
            <p class="lead text-muted text-center">Discover the power of leadership in the Christian Union and make a
                difference</p>
        </div>
    </section>

    <!-- exec -->
    <section id="exec">
        <div class="container-xl">
            <div class="text-center">
                <h2>
                    <div class="display-5">The Executive Committee</div>
                </h2>
                <p class="lead text-muted mb-16">Get to know the dedicated leaders of our Christian Union.</p>
            </div>
            <div class="row text-center">


            <?php foreach ($leaders as $leader): ?>
                <div class="col-md-4 col-lg-3">
                    <img src="<?php echo htmlspecialchars($leader['image'], ENT_QUOTES, 'UTF-8'); ?>" alt=""
                        class="rounded-circle" width="100" height="100" aria-label="leader-image"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h5 class="fw-bold mt-2"><?php echo htmlspecialchars($leader['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                    <h5 class="mb-3"><?php echo htmlspecialchars($leader['position'], ENT_QUOTES, 'UTF-8'); ?></h5>
                    <p class="mb-2 text-muted">
                        <?php echo htmlspecialchars($leader['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <ul class="nav justify-content-center mb-4">
                        <?php if (!empty($leader['linkedin'])): ?>
                        <li class="nav-item mx-1"><a class="nav-link p-0"
                                href="<?php echo htmlspecialchars($leader['linkedin'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank"><svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#linkedin"></use>
                                </svg></a></li>
                        <?php endif; ?>
                        <?php if (!empty($leader['facebook'])): ?>
                        <li class="nav-item mx-1"><a class="nav-link p-0"
                                href="<?php echo htmlspecialchars($leader['facebook'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank"><svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#facebook"></use>
                                </svg></a></li>
                        <?php endif; ?>
                        <?php if (!empty($leader['whatsapp'])): ?>
                        <li class="nav-item mx-1"><a class="nav-link p-0"
                                href="<?php echo htmlspecialchars($leader['whatsapp'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank"><svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/<?php echo BASE_URL; ?>assets/icons.svg#whatsapp"></use>
                                </svg></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
        </div>
    </section>

    <!-- advisory -->
    <section id="advisory">
        <div class="container-xl justify-content-center">
            <div class="row">
                <div class="col col-auto col-md-6">
                    <h2 class="display-6">Advisory Board: Providing Guidance and Oversight</h2>
                </div>

                <div class="col col-auto col-md-6">
                    <p class="text-muted">The Advisory Board plays a crucial role in providing guidance and oversight to
                        Maseno
                        University Christian Union. Comprised of experienced leaders and experts, the board ensures that
                        the
                        Christian Union stays true to its mission and values, and provides strategic direction for the
                        organization. Through regular meetings and consultations, the Advisory Board offers valuable
                        insights
                        and recommendations to help the Christian Union thrive and fulfill its purpose.</p>
                </div>
                <div class="col-12">
                    <img src="/<?php echo BASE_URL; ?>assets/images/Wide Placeholder Image.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- subcoms -->
    <section id="subcoms">
        <div class="container-xl">
            <div class="row">
                <div class="col col-auto col-md-6">
                    <h2 class="display-6">Committees Serving Under the Executive Committee</h2>
                </div>
                <div class="col col-auto col-md-6">
                    <p class="text-muted">The Maseno University Christian Union is supported by various committees that
                        serve
                        under the Executive Committee. These committees play a crucial role in the smooth functioning
                        and
                        growth
                        of the Christian Union.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- nomination -->
    <section id="nomination">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col col-auto col-md-6">
                    <h2 class="display-6">Discover How Leaders are Chosen to Guide the Christian Union</h2>
                    <p class="text-muted">The Christian Union has a rigorous selection process to identify dedicated
                        individuals who will lead and serve the community with integrity and passion.</p>
                </div>
                <div class="col col-auto col-md-6">
                    <img class="img-fluid" src="/<?php echo BASE_URL; ?>assets/images/700x500.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials -->
    <section id="testimonials">

    </section>
    <!-- guidelines -->
    <section id="guidelines">
        <div class="container-xl">
            <div class="row mb-4">
                <div class="col col-auto col-md-6">
                    <h2 class="display-6">Leadership Team: Planning and Executing Together
                    </h2>
                </div>
                <div class="col col-auto col-md-6">
                    <p class="text-muted">The leadership team of Maseno University Christian Union collaborates closely
                        to
                        plan and execute the Union's activities and events. They work together to ensure that all
                        initiatives align with the Union's mission and goals. Through effective communication and
                        coordination, the team ensures that each member's strengths and expertise are utilized to their
                        fullest potential.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto col-md-6 col-lg-4">
                    <h5>Strategic Planning</h5>
                    <p class="text-muted">The leadership team engages in strategic planning to set clear objectives and
                        timelines for each initiative.</p>
                </div>
                <div class="col-auto col-md-6 col-lg-4">
                    <h5>Task Delegation</h5>
                    <p class="text-muted">Tasks and responsibilities are delegated among team members based on their
                        skills
                        and areas of expertise.</p>
                </div>
                <div class="col-auto col-md-6 col-lg-4">
                    <h5>Effective Communication</h5>
                    <p class="text-muted">The leadership team maintains open and transparent communication channels to
                        ensure everyone is informed and aligned.</p>
                </div>
            </div>
    </section>

    <?php include"../models/footer.php"; ?>

    

    <!-- main js -->
    <script src="/<?php echo BASE_URL; ?>assets/scripts/main.js"></script>
    <!-- bootstrap JS -->
    <script src="/<?php echo BASE_URL; ?>assets/scripts/bootstrap.bundle.min.js"></script>

</body>

</html>