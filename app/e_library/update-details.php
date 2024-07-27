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

		// Fetch user's current details from the database
		$username = $_SESSION["username"];
		$query = "SELECT * FROM lib_registration WHERE username= '$username'";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_assoc($result);
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
							<span class="disabled">Update-details</span>
						</div>
					</div>
				</div>
			</div>					
		</div>
		<div class="container" mt-4>
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h3>Update Your Details</h3>
					<form action="update-details-process.php" method="post">
						<div class="form-group">
                        	<label for="name">Name:</label>
                        	<input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
                    	</div>
						<div class="form-group">
                        	<label for="email">Email:</label>
                        	<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    	</div>
                    	<div class="form-group">
                        	<label for="phone">Phone:</label>
                        	<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>
                    	</div>
						<button type="submit" class="btn btn-primary">Update Details</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php 
		include 'inc/footer.php';
	 ?>