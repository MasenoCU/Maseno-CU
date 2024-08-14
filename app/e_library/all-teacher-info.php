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

$page = 'tinfo';
include 'inc/header.php';
require '../components/db_connection.php'; // MongoDB connection
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
                        <span class="disabled">all teacher info</span>
                    </div>
                </div>
            </div>
            <div class="student-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="std-info">
                            <table id="dtBasicExample" class="table table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th>Id No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Lecturer</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>       
                                    <?php
                                    $collection = $database->selectCollection('t_registration');
                                    $teachers = $collection->find();

                                    foreach ($teachers as $teacher) {
                                        echo "<tr>";
                                        echo "<td>" . $teacher["idno"] . "</td>";
                                        echo "<td>" . $teacher["name"] . "</td>";
                                        echo "<td>" . $teacher["username"] . "</td>";
                                        echo "<td>" . $teacher["lecturer"] . "</td>";
                                        echo "<td>" . $teacher["email"] . "</td>";
                                        echo "<td>" . $teacher["phone"] . "</td>";
                                        echo "<td>" . $teacher["address"] . "</td>";
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
