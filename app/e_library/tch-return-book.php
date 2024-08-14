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
require '../components/db_connection.php'; // Use MongoDB connection here
if($database){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Return Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="inc/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-header">
                    <div class="left">
                        <p><span>Dashboard</span> Control panel</p>
                    </div>
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i> Home</a>
                        <span class="disabled">Return Book</span>
                    </div>
                </div>
                <div class="return-book">
                    <form action="" method="post" name="form1">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <select name="enr" class="form-control">
                                        <?php 
                                            // Fetch ID numbers from MongoDB
                                            $collection = $database->selectCollection('teacher_registration');
                                            $cursor = $collection->find([], ['projection' => ['idno' => 1]]);
                                            
                                            foreach ($cursor as $doc) {
                                                echo "<option value='".$doc['idno']."'>".$doc['idno']."</option>";
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
                                            <th>ID No</th>
                                            <th>Name</th>
                                            <th>Username</th>
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
                                            if (isset($_POST["submit1"])) {
                                                $idno = $_POST["enr"];
                                                
                                                // Fetch issued book records for the selected ID from MongoDB
                                                $issueCollection = $database->selectCollection('teacher_issuebook');
                                                $result = $issueCollection->find(['idno' => $idno]);

                                                foreach ($result as $row) {
                                                    echo "<tr>";
                                                    echo "<td>".$row['idno']."</td>";
                                                    echo "<td>".$row['name']."</td>";
                                                    echo "<td>".$row['username']."</td>";
                                                    echo "<td>".$row['dept']."</td>";
                                                    echo "<td>".$row['booksname']."</td>";
                                                    echo "<td>".$row['booksissuedate']."</td>";
                                                    echo "<td>".$row['email']."</td>";
                                                    echo "<td>".$row['phone']."</td>";
                                                    echo "<td><a href='return.php?id=".$row['_id']."' class='btn btn-danger'>Return Book</a></td>";
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
</body>
</html>

<?php 
include 'inc/footer.php';
                                        }
?>
