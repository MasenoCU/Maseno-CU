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
require '../components/db_connection.php'; // MongoDB connection

if($database){
// Select the collection
$collection = $database->selectCollection('lib_registration');

// Fetch all users from the MongoDB database
$usersCursor = $collection->find();

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
                        <span class="disabled">view user</span>
                    </div>
                </div>
            </div>
        </div>					
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($usersCursor as $userDocument) { 
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($userDocument['name']); ?></td>
                                <td><?php echo htmlspecialchars($userDocument['username']); ?></td>
                                <td><?php echo htmlspecialchars($userDocument['email']); ?></td>
                                <td><?php echo htmlspecialchars($userDocument['phone']); ?></td>
                                <td><?php echo htmlspecialchars($userDocument['address']); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php 
include 'inc/footer.php';}
?>
