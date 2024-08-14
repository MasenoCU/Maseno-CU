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

$page = 'sinfo';
include 'inc/header.php';
require '../components/db_connection.php';// MongoDB connection
if ($database){
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
                        <span class="disabled">all student info</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="student-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="std-info">
                        <table id="dtBasicExample" class="table table-dark table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Reg no</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Semester</th>
                                    <th>Dept</th>
                                    <th>Session</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $collection = $database->selectCollection('std_registration');
                                $students = $collection->find();

                                foreach ($students as $student) {
                                    echo "<tr>";
                                    echo "<td>" . $student["regno"] . "</td>";
                                    echo "<td>" . $student["name"] . "</td>";
                                    echo "<td>" . $student["username"] . "</td>";
                                    echo "<td>" . $student["sem"] . "</td>";
                                    echo "<td>" . $student["dept"] . "</td>";
                                    echo "<td>" . $student["session"] . "</td>";
                                    echo "<td>" . $student["email"] . "</td>";
                                    echo "<td>" . $student["phone"] . "</td>";
                                    echo "<td>" . $student["address"] . "</td>";
                                    echo "</tr>";
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

<?php 
include 'inc/footer.php';}
?>

<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
