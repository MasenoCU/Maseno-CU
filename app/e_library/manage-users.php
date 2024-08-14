<?php
    session_start();
    
    if (!isset($_SESSION["username"])) {
        ?>
        <script type="text/javascript">
            window.location = "login.php";
        </script>
        <?php
    }
    
    include 'inc/header.php';
	require '../components/db_connection.php'; // Ensure this file initializes $client
    if(isset($client)){
    // Fetch users from MongoDB
    $collection = $client->library->lib_registration; // Replace 'library' with your database name
    $result = $collection->find();

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
                        <span class="disabled">Add Users</span>
                    </div>
                </div>
            </div>
        </div>					
    </div>
</div>

<div class="container">
    <div class="row justify-content-center"> <!-- Center content horizontally -->
        <div class="col-md-6">
            <div class="text-center"> <!-- Center text -->
                <h4 class="mt-20">Manage Users</h4>
                <ul class="list-unstyled">
                    <li><a href="registration.php">Add User</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'inc/footer.php';
	}
?>
