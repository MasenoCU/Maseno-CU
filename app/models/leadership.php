<?php
require_once "db_connection.php";
require_once "../../config.php";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/<?php echo BASE_URL; ?>assets/scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page title -->
    <title>Executive Committee</title>
    <!-- custon css -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/custom.css">
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/blog.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
    html, body {
    height: 100%;
    overflow: hidden;
    }

    .container-xl {
    font-family: Arial, sans-serif;
    height: 100vh;
    overflow-x: hidden; /* Prevent horizontal scroll */
    overflow-y: auto; /* Allow vertical scrolling */
    scrollbar-width: none; /* Hide scrollbar on Firefox */
    }

    /* Hide scrollbar in Webkit-based browsers (Chrome, Safari, etc.) */
    .container-xl::-webkit-scrollbar {
    display: none;
    }

    </style>
</head>

<body class="container-xl">
    <section id="leadership">
        <div class="container-xl">
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
                        <li class="nav-item mx-1">
                            <a class="nav-link p-0"
                                href="<?php echo htmlspecialchars($leader['linkedin'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank">
                                <svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/<?php echo BASE_URL; ?>assets/icons/icons.svg#linkedin"></use>
                                </svg>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (!empty($leader['facebook'])): ?>
                        <li class="nav-item mx-1">
                            <a class="nav-link p-0"
                                href="<?php echo htmlspecialchars($leader['facebook'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank">
                                <svg class="bi text-body-primary" width="20" height="20">
                                    <use xlink:href="/<?php echo BASE_URL; ?>assets/icons/icons.svg#facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (!empty($leader['whatsapp'])): ?>
                        <li class="nav-item mx-1">
                            <a class="nav-link p-0"
                                href="<?php echo htmlspecialchars($leader['whatsapp'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank">
                                <svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="/<?php echo BASE_URL; ?>assets/icons/icons.svg#whatsapp"></use>
                                </svg>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

</html>