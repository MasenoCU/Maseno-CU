<?php
require_once "db_connection.php";
require_once "../../config.php";

// Fetch events from the database
$events = fetchTableData($connection, 'Events');

// Ensure $events is always an array
if (!is_array($events)) {
    $events = []; // Default to an empty array if the query fails
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="<?php echo BASE_URL; ?>assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page title -->
    <title>Events</title>
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/blog.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>
    <!-- events -->
    <section id="events">
        <!-- tab navigation -->
        <div class="tab-nav-bar justify-content-center align-items-center">
            <div class="tab-navigation justify-content-center align-items-center">
                <i class="uil uil-angle-left left-btn"></i>
                <i class="uil uil-angle-right right-btn"></i>
                <ul class="tab-menu">
                    <li class="tab-btn active">View All</li>
                    <li class="tab-btn">Fellowship</li>
                    <li class="tab-btn">Worship</li>
                    <li class="tab-btn">Prayer</li>
                    <li class="tab-btn">Bible Study</li>
                    <li class="tab-btn">Outreach</li>
                    <li class="tab-btn">Training</li>
                </ul>
            </div>
        </div>
        <!-- tab content -->
        <div class="tab-content container-xl justify-content-center align-items-center">
            <!-- View All -->
            <div class="p-0 tab active">
                <?php foreach ($events as $event): ?>
                <div class="row ms-0 mb-2 p-0 row-cols-1 row-cols-md-12 g-11 justify-content-center align-items-center"
                    style="max-width: 100%; border: solid 2px #25aae1; border-width: 2px; border-radius: 0;">
                    <div class="col-auto col-md-2 p-0 mx-auto mx-md-0" style="width: 140px;">
                        <div class="p-2 text-center">
                            <p class="m-0"><?php echo htmlspecialchars($event['day'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <h3 class="m-0"><?php echo htmlspecialchars($event['date'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="m-0"><?php echo htmlspecialchars($event['month_of_year'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-auto p-0 d-none d-md-inline">
                        <div class="p-0" style="height: 80px; border-right: solid 2px #00a651;"></div>
                    </div>
                    <div class="col-md-auto p-0 d-md-none">
                        <div class="mx-2 p-0" style="width: auto; border-bottom: solid 2px #00a651;"></div>
                    </div>
                    <div class="col-auto col-md-6 p-0">
                        <div class="p-2 ms-3">
                            <h5 class="m-0"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p class="m-0"><small class="text-body-secondary">
                                <?php echo htmlspecialchars($event['location'], ENT_QUOTES, 'UTF-8'); ?>
                            </small></p>
                            <p class="m-0"><small class="text-body-secondary">
                                <?php echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8'); ?>
                            </small></p>
                        </div>
                    </div>
                    <div class="col-auto col-md-3 ms-auto p-0" style="width: 172px;">
                        <div class="p-2">
                            <button class="btn btn-warning" type="button">I will be attending</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- Fellowship -->
            <div class="tab">
                <?php foreach ($events as $event): ?>
                <?php if ($event['category'] === 'fellowship'): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 my-4 justify-content-center align-items-center">
                    <div class="col col-auto m-0 text-center left-column">
                        <div class="img-card">
                            <img class="img-fluid d-md-block"
                                src="<?php echo htmlspecialchars($event['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col ms-auto text- text-md-start p-2 m-0 right-column">
                        <div class="info">
                            <h4 class="event"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                            <div class="description text-muted">
                                <p class="m-0"><?php echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Worship -->
            <div class="tab">
                <?php foreach ($events as $event): ?>
                <?php if ($event['category'] === 'worship'): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 my-4 justify-content-center align-items-center">
                    <div class="col col-auto m-0 text-center left-column">
                        <div class="img-card">
                            <img class="img-fluid d-md-block"
                                src="<?php echo htmlspecialchars($event['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col ms-auto text- text-md-start p-2 m-0 right-column">
                        <div class="info">
                            <h4 class="event"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                            <div class="description text-muted">
                                <p class="m-0"><?php echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Prayer -->
            <div class="tab">
                <?php foreach ($events as $event): ?>
                <?php if ($event['category'] === 'prayer'): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 my-4 justify-content-center align-items-center">
                    <div class="col col-auto m-0 text-center left-column">
                        <div class="img-card">
                            <img class="img-fluid d-md-block"
                                src="<?php echo htmlspecialchars($event['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col ms-auto text- text-md-start p-2 m-0 right-column">
                        <div class="info">
                            <h4 class="event"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                            <div class="description text-muted">
                                <p class="m-0"><?php echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Bible Study -->
            <div class="tab">
                <?php foreach ($events as $event): ?>
                <?php if ($event['category'] === 'bible_study'): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 my-4 justify-content-center align-items-center">
                    <div class="col col-auto m-0 text-center left-column">
                        <div class="img-card">
                            <img class="img-fluid d-md-block"
                                src="<?php echo htmlspecialchars($event['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col ms-auto text- text-md-start p-2 m-0 right-column">
                        <div class="info">
                            <h4 class="event"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                            <div class="description text-muted">
                                <p class="m-0"><?php echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Outreach -->
            <div class="tab">
                <?php foreach ($events as $event): ?>
                <?php if ($event['category'] === 'outreach'): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 my-4 justify-content-center align-items-center">
                    <div class="col col-auto m-0 text-center left-column">
                        <div class="img-card">
                            <img class="img-fluid d-md-block"
                                src="<?php echo htmlspecialchars($event['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col ms-auto text- text-md-start p-2 m-0 right-column">
                        <div class="info">
                            <h4 class="event"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                            <div class="description text-muted">
                                <p class="m-0"><?php echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Training -->
            <div class="tab">
                <?php foreach ($events as $event): ?>
                <?php if ($event['category'] === 'training'): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 my-4 justify-content-center align-items-center">
                    <div class="col col-auto m-0 text-center left-column">
                        <div class="img-card">
                            <img class="img-fluid d-md-block"
                                src="<?php echo htmlspecialchars($event['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col ms-auto text- text-md-start p-2 m-0 right-column">
                        <div class="info">
                            <h4 class="event"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                            <div class="description text-muted">
                                <p class="m-0"><?php echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- end tab-content -->
    </section>

    <!-- main js -->
    <script src="<?php echo BASE_URL; ?>assets/scripts/main.js"></script>
    <!-- bootstrap JS -->
    <script src="<?php echo BASE_URL; ?>assets/scripts/bootstrap.bundle.min.js"></script>
</body>

</html>
