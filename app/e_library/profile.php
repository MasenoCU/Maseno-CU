<?php 
session_start();
if (!isset($_SESSION["username"])) {
    ?>
        <script type="text/javascript">
            window.location="login.php";
        </script>
    <?php
}

$page = 'profile';
include 'inc/header.php';
require '../components/db_connection.php';

use MongoDB\Exception\Exception as MongoDBException;

// Initialize variables
$user = null;
$imageUploadSuccess = false;

// Fetch user profile data
try {
    if ($database) {
        $collection = $database->selectCollection('lib_registration');
        $user = $collection->findOne(['username' => $_SESSION['username']]);
    } else {
        echo '<div class="alert alert-danger">
                <strong>Error!</strong> Could not connect to the database.
              </div>';
    }
} catch (MongoDBException $e) {
    /** @var \Throwable $e */
    echo '<div class="alert alert-danger">
            <strong>Error!</strong> ' . htmlspecialchars($e->getMessage()) . '
          </div>';
}

// Handle image upload
if (isset($_POST["submit"])) {
    $image_name = $_FILES['image']['name'];
    $temp = explode(".", $image_name);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $imagepath = "upload/" . $newfilename;
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagepath)) {
        try {
            if ($database) {
                $collection->updateOne(
                    ['username' => $_SESSION['username']],
                    ['$set' => ['photo' => $imagepath]]
                );
                $imageUploadSuccess = true;
            }
        } catch (MongoDBException $e) {
            /** @var \Throwable $e */
            echo '<div class="alert alert-danger">
                    <strong>Error!</strong> ' . htmlspecialchars($e->getMessage()) . '
                  </div>';
        }
    }
    if ($imageUploadSuccess) {
        ?>
        <script type="text/javascript">
            window.location="profile.php";
        </script>
        <?php
    }
}

// Handle profile update
if (isset($_POST["update"])) {
    try {
        if ($database) {
            $collection->updateOne(
                ['username' => $_SESSION['username']],
                ['$set' => [
                    'name' => $_POST['name'],
                    'phone' => $_POST['phone'],
                    'address' => $_POST['address']
                ]]
            );
            ?>
            <script type="text/javascript">
                window.location="profile.php";
            </script>
            <?php
        }
    } catch (MongoDBException $e) {
        /** @var \Throwable $e */
        echo '<div class="alert alert-danger">
                <strong>Error!</strong> ' . htmlspecialchars($e->getMessage()) . '
              </div>';
    }
}
?>
<!--dashboard area-->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>dashboard</span>Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i>home</a>
                        <span class="disabled">profile</span>
                    </div>
                </div>
            </div>
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="photo">
                            <?php
                            if ($user) {
                                ?><img src="<?php echo $user['photo']; ?>" height="" width="" alt="Profile Picture"><?php
                            }
                            ?>
                        </div>
                        <div class="uploadPhoto">
                            <div class="gap-30"></div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="file" name="image" class="modal-mt" id="image">
                                <div class="gap-30"></div>
                                <input type="submit" class="modal-mt btn btn-info" value="Upload Image" name="submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-7 ml-30">
                        <div class="details">
                            <form method="post">
                                <div class="form-group">
                                    <label for="name" class="text-right">Name:</label>
                                    <input type="text" class="form-control custom" name="name" value="<?php echo $user ? $user['name'] : ''; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control custom" placeholder="Username" name="username" value="<?php echo $user ? $user['username'] : ''; ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control custom" name="email" value="<?php echo $user ? $user['email'] : ''; ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone No:</label>
                                    <input type="text" class="form-control custom" name="phone" value="<?php echo $user ? $user['phone'] : ''; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control custom" name="address" value="<?php echo $user ? $user['address'] : ''; ?>" />
                                </div>
                                <div class="text-right mt-20">
                                    <input type="submit" value="Save" class="btn btn-info" name="update">
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>                    
    </div>
</div>
<?php 
include 'inc/footer.php';
?>
