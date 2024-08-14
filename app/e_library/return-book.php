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
if($database){
	if (isset($_POST["submit1"])) {
		$enr = $_POST["enr"];
		$collection = $database->selectCollection('book_issues');
		$query = ['enrollment_number' => $enr];
		$options = ['sort' => ['issue_date' => -1]];
		$books = $collection->find($query, $options);
	}
}else{
	echo 'Connection a problem';
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
                                    <option value="">14502000020</option>
                                    <option value="">14502000007</option>
                                    <option value="">14502000008</option>
                               </select>
                           </td>
                           <td>
                               <input type="submit" name="submit1" class="btn btn-info form-control" value="Search">
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
                                    if (isset($books)) {
                                        foreach ($books as $book) {
                                            echo "<tr>";
                                            echo "<td>"; echo htmlspecialchars($book["reg_no"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["name"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["username"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["semester"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["dept"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["book_name"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["issue_date"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["email"]); echo "</td>";
                                            echo "<td>"; echo htmlspecialchars($book["phone"]); echo "</td>";
                                            echo "<td><a href='return.php' class='link'>Return book</a></td>";
                                            echo "</tr>";
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
