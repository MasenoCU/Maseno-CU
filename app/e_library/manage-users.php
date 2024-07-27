<?php
		 session_start();
		if (!isset($_SESSION["username"])) {
            ?>
                <script type="text/javascript">
                    window.location="login.php";
                </script>
            <?php
        }
        include 'inc/header.php';
        include 'inc/connection.php';

		// Fetch users from the database
		$query = "SELECT * FROM lib_registration";
		$result = mysqli_query($link, $query);
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
?>
