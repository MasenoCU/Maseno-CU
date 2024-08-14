<?php 
session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
    <?php
    exit();
}

include 'inc/header.php';
require '../components/db_connection.php';
if($database){
$username = $_SESSION["username"];
$collection = $database->selectCollection('lib_registration');

// Find the document where the username matches the session username
$userDocument = $collection->findOne(['username' => $username]);

// Check if userDocument exists
if (!$userDocument) {
    // Redirect to the login page if the user is not found
    header("Location: login.php");
    exit();
}
?>
<!-- Dashboard area -->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>dashboard</span> Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i> home</a>
                        <span class="disabled">Update-details</span>
                    </div>
                </div>
            </div>
        </div>					
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Update Your Details</h3>
                <form action="update-details-process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($userDocument['name']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($userDocument['email']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($userDocument['phone']); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Details</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
include 'inc/footer.php';
}
?>
