<?php

require '../components/db_connection.php'; // MongoDB connection file

use MongoDB\Exception\Exception as MongoDBException;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maseno CU Library Management</title>
    <link rel="stylesheet" href="inc/css/bootstrap.min.css">
    <link rel="stylesheet" href="inc/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="inc/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="inc/css/datatables.min.css">
    <link rel="stylesheet" href="inc/css/pro1.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
</head>
<body>
    <div class="main-content">
        <div class="wrapper">
            <div class="left-sidebar">
                <div class="p-title">
                    <h3><a href=""><i class="fas fa-book"></i><span>MUCU E-Library Management System</span></a></h3>
                </div>
                <div class="gap-40"></div>
                <div class="profile">
                    <div class="profile-pic">
                        <?php
                        try {
                            if ($database) {
                                $collection = $database->selectCollection('lib_registration');
                                $user = $collection->findOne(['username' => $_SESSION['username']]);
                                if ($user) {
                                    ?><img src="<?php echo $user['photo']; ?>" height="" width="" alt="Profile Picture" class="rounded-circle"><?php
                                }
                            }
                        } catch (MongoDBException $e) {
							/** @var \Throwable $e */
                            echo '<div class="alert alert-danger">
                                    <strong>Error!</strong> ' . htmlspecialchars($e->getMessage()) . '
                                  </div>';
                        }
                        ?>
                    </div>
                    <div class="profile-info text-center">
                        <span>Welcome!</span>
                        <h2>
                            <?php
                            try {
                                if ($database) {
                                    $user = $collection->findOne(['username' => $_SESSION['username']]);
                                    if ($user) {
                                        echo $user['username'];
                                    }
                                }
                            } catch (MongoDBException $e) {
								/** @var \Throwable $e */
                                echo '<div class="alert alert-danger">
                                        <strong>Error!</strong> ' . htmlspecialchars($e->getMessage()) . '
                                      </div>';
                            }
                            ?>
                        </h2>
                    </div>
                </div>
                <div class="gap-30"></div>
                <div class="sidebar-menu">
                    <!-- Sidebar menu code remains the same -->
                </div>
            </div>
            <div class="content">
                <div class="inner">
                    <div class="heading text-center">
                        <h3>Librarian Control Panel</h3>
                    </div>
                    <div class="header-profile text-right">
                        <ul>
                            <li class="icon">
                                <a href="requested-books.php"><i class="fas fa-bell"></i></a>
                                <span class="count" onclick="window.location='requested-books.php'"><b><?php echo $not; ?></b></span>
                            </li>
                            <li class="dropdown">
                                <?php
                                try {
                                    if ($database) {
                                        $user = $collection->findOne(['username' => $_SESSION['username']]);
                                        if ($user) {
                                            ?><a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $user['photo']; ?>" alt=""><span><?php echo $_SESSION["username"]; ?></span></a><?php
                                        }
                                    }
                                } catch (MongoDBException $e) {
									/** @var \Throwable $e */
                                    echo '<div class="alert alert-danger">
                                            <strong>Error!</strong> ' . htmlspecialchars($e->getMessage()) . '
                                          </div>';
                                }
                                ?>
                                <ul class="dropdown-menu">
                                    <li class="user-header text-center">
                                        <?php
                                        try {
                                            if ($database) {
                                                $user = $collection->findOne(['username' => $_SESSION['username']]);
                                                if ($user) {
                                                    ?><img src="<?php echo $user['photo']; ?>" alt=""><?php
                                                }
                                            }
                                        } catch (MongoDBException $e) {
											/** @var \Throwable $e */
                                            echo '<div class="alert alert-danger">
                                                    <strong>Error!</strong> ' . htmlspecialchars($e->getMessage()) . '
                                                  </div>';
                                        }
                                        ?>
                                        <p><?php echo $_SESSION["username"]; ?> - Librarian</p>
                                    </li>
                                    <li class="user-footer">
                                        <ul>
                                            <li><a href="profile.php">Profile</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="inc/js/jquery-2.2.4.min.js"></script>
<script src="inc/js/bootstrap.min.js"></script>
<script src="inc/js/custom.js"></script>
</body>
</html>
