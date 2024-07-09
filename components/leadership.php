<?php include("db_connection.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="../scripts/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page title -->
    <title>Events</title>
    <!-- custon css -->
    <link rel="stylesheet" href="../styles/custom.css">
    <link rel="stylesheet" href="../styles/blog.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>

    <!-- This is the leadership section -->
    <section id="leadership">
        <div class="container-xl">
            <div class="text-center">
                <h2><div class="display-4">Meet Our Team</div></h2>
                <p class="lead text-muted mb-16">Get to know the dedicated leaders of our Christian Union.</p>
            </div>
            <div class="row text-center">
                <?php foreach ($leaders as $leader): ?>
                <div class="col-md-4 col-lg-3">
                    <img src="<?php echo htmlspecialchars($leader['image'], ENT_QUOTES, 'UTF-8'); ?>" class="rounded-circle" width="100" height="100" aria-label="leader-image" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h5 class="fw-bold mt-2"><?php echo htmlspecialchars($leader['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                    <h5 class="mb-3"><?php echo htmlspecialchars($leader['position'], ENT_QUOTES, 'UTF-8'); ?></h5>
                    <p class="mb-2 text-muted"><?php echo htmlspecialchars($leader['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <ul class="nav justify-content-center mb-4">
                        <?php if (!empty($leader['linkedin'])): ?>
                        <li class="nav-item mx-1"><a class="nav-link p-0" href="<?php echo htmlspecialchars($leader['linkedin'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank"><svg class="bi text-body-secondary" width="20" height="20"><use xlink:href="../assets/icons.svg#linkedin"></use></svg></a></li>
                        <?php endif; ?>
                        <?php if (!empty($leader['facebook'])): ?>
                        <li class="nav-item mx-1"><a class="nav-link p-0" href="<?php echo htmlspecialchars($leader['facebook'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank"><svg class="bi text-body-secondary" width="20" height="20"><use xlink:href="../assets/icons.svg#facebook"></use></svg></a></li>
                        <?php endif; ?>
                        <?php if (!empty($leader['whatsapp'])): ?>
                        <li class="nav-item mx-1"><a class="nav-link p-0" href="<?php echo htmlspecialchars($leader['whatsapp'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank"><svg class="bi text-body-secondary" width="20" height="20"><use xlink:href="../assets/icons.svg#whatsapp"></use></svg></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row justify-content-center align-items-center">
              <a href="../leadership.php" target="_parent" rel="noreferrer" class="btn col-auto btn-success btn-sm mt-3">Meet them all</a>
            </div>
        </div>
    </section>
</body>
</html>