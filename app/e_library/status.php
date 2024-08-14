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
                        <span class="disabled">user status</span>
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
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($database){
                                        try {
                                            // Fetching student and teacher registration data
                                            $stdCollection = $database->selectCollection('student_registration');
                                            $tCollection = $database->selectCollection('teacher_registration');
    
                                            $studentData = $stdCollection->find([], ['sort' => ['_id' => -1]]);
                                            $teacherData = $tCollection->find([], ['sort' => ['_id' => -1]]);
    
                                            foreach ($studentData as $row) {
                                                echo "<tr>";
                                                echo "<td>" . $row["name"] . "</td>";
                                                echo "<td>" . $row["username"] . "</td>";
                                                echo "<td>" . $row["utype"] . "</td>";
                                                echo "<td>" . $row["email"] . "</td>";
                                                echo "<td>" . $row["status"] . "</td>";
                                                echo "<td>";
                                                ?>
                                                <ul>
                                                    <li><a href="approve.php?id=<?php echo $row["_id"]; ?>"><i class="fas fa-location-arrow"></i></a></li>
                                                    <li><a href="notapprove.php?id=<?php echo $row["_id"]; ?>"><i class="fas fa-allergies"></i></a></li>
                                                </ul>
                                                <?php
                                                echo "</td>";
                                                echo "</tr>";
                                            }
    
                                            foreach ($teacherData as $row) {
                                                echo "<tr>";
                                                echo "<td>" . $row["name"] . "</td>";
                                                echo "<td>" . $row["username"] . "</td>";
                                                echo "<td>" . $row["utype"] . "</td>";
                                                echo "<td>" . $row["email"] . "</td>";
                                                echo "<td>" . $row["status"] . "</td>";
                                                echo "<td>";
                                                ?>
                                                <ul>
                                                    <li><a href="approve.php?id=<?php echo $row["_id"]; ?>"><i class="fas fa-location-arrow"></i></a></li>
                                                    <li><a href="notapprove.php?id=<?php echo $row["_id"]; ?>"><i class="fas fa-allergies"></i></a></li>
                                                </ul>
                                                <?php
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } catch (MongoDB\Exception\Exception $e) {
                                            echo "<span style='color: red;'><b>Error !</b> Couldn't fetch user data: " . $e->getMessage() . "</span>";
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
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
