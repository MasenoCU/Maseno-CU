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
				<div class="table-responsive" >
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
							while ($row = mysqli_fetch_assoc($result)) { 
								?>
								<tr>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['address']; ?></td>
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
		include 'inc/footer.php';
	 ?>