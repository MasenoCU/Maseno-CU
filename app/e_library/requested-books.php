<?php 
session_start();
if (!isset($_SESSION["username"])) {
    ?>
        <script type="text/javascript">
            window.location="login.php";
        </script>
    <?php
}

$page = 'rbook';
include 'inc/header.php';
require '../components/db_connection.php';// MongoDB connection file

// Update the status of requested books in MongoDB
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
                        <span class="disabled">requested books</span>
                    </div>
                </div>
            </div>
            <div class="issued-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="rbook-info status">
                            <table id="dtBasicExample" class="table table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>User Type</th>
                                        <th>Email</th>
                                        <th>Book Name</th>
                                        <!--th>Book Url</th-->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
								if ($database){
									$collection = $database->selectCollection('request_books');
									$collection->updateMany([], ['$set' => ['read1' => 'yes']]);
								// Fetch requested books from MongoDB
                                    $books = $collection->find([], ['sort' => ['_id' => -1]]);
                                    foreach ($books as $book) {
                                        $burl = $book['burl'];
                                        echo "<tr>";
                                        echo "<td>"; echo htmlspecialchars($book["name"]); echo "</td>";
                                        echo "<td>"; echo htmlspecialchars($book["username"]); echo "</td>";
                                        echo "<td>"; echo htmlspecialchars($book["utype"]); echo "</td>";
                                        echo "<td>"; echo htmlspecialchars($book["email"]); echo "</td>";
                                        echo "<td>"; echo htmlspecialchars($book["bname"]); echo "</td>";
                                        echo "<td>";
                                        ?><a href="<?php echo htmlspecialchars($burl); ?>" target="_blank">View</a><?php
                                        echo "</td>";
                                        echo "</tr>";
                                    }
								}else{
									echo"Failed to connect ";
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
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
