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
require '../components/db_connection.php';

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
                        <span class="disabled">return book</span>
                    </div>
                </div>
            </div>
            <div class="rBook">
                <form action="" method="post" name="form1">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <select name="enr" class="form-control">
                                    <!-- Options should be dynamically populated from the database -->
                                    <?php
									if ($database){
										try {
											$collection = $database->selectCollection('student_registration');
											$cursor = $collection->find();
	
											foreach ($cursor as $document) {
												?><option value="<?php echo $document['reg_no']; ?>">
												<?php echo $document['reg_no']; ?>
												</option><?php
											}
										} catch (MongoDB\Exception\Exception $e) {
											echo "<span style='color: red;'><b>Error !</b> Couldn't fetch registration data: " . $e->getMessage() . "</span>";
										}
									}

                                    ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" name="submit1" class="btn btn-info" value="Search">
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rbook-info">
                            <table class="table table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th>Reg No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Semester</th>
                                        <th>Dept</th>
                                        <th>Book Name</th>
                                        <th>Issue Date</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Return Book</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
								if ($database){
									if (isset($_POST['submit1'])) {
										$enr = $_POST['enr'];
										try {
											// Fetching the student data based on selected registration number
											$collection = $database->selectCollection('issued_books');
											$cursor = $collection->find(['reg_no' => $enr]);
	
											foreach ($cursor as $document) {
												echo "<tr>";
												echo "<td>" . $document['reg_no'] . "</td>";
												echo "<td>" . $document['name'] . "</td>";
												echo "<td>" . $document['username'] . "</td>";
												echo "<td>" . $document['semester'] . "</td>";
												echo "<td>" . $document['dept'] . "</td>";
												echo "<td>" . $document['book_name'] . "</td>";
												echo "<td>" . $document['issue_date'] . "</td>";
												echo "<td>" . $document['email'] . "</td>";
												echo "<td>" . $document['phone'] . "</td>";
												echo "<td><a href='return.php'>Return book</a></td>";
												echo "</tr>";
											}
										} catch (MongoDB\Exception\Exception $e) {
											echo "<span style='color: red;'><b>Error !</b> Couldn't fetch issued books data: " . $e->getMessage() . "</span>";
										}
									}
								}
                                ?>
                                </tbody>
                            </table>
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
