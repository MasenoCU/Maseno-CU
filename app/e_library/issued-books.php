<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo '<script type="text/javascript">window.location="login.php";</script>';
    exit();
}

$page = 'ibook';
include 'inc/header.php';
require '../components/db_connection.php';// Ensure this file initializes $client

if(isset($client)){
// Access the library database and collections
$mongoClient = $client;
$db = $mongoClient->library;
$issueCollection = $db->issue_book;
$tIssueCollection = $db->t_issuebook;

// Function to calculate days overdue
function calculateDaysOverdue($returnDate) {
    $returnDate = strtotime($returnDate);
    $currentDate = time();

    $difference = $currentDate - $returnDate;
    $daysOverdue = floor($difference / (60 * 60 * 24));

    return max(0, $daysOverdue); // Ensure non-negative value
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
                        <span class="disabled">issued books</span>
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
                                        <th>Books Name</th>
                                        <th>Issue Date</th>
                                        <th>Return Date</th>
                                        <th>User Type</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        <th>Days Overdue</th> <!-- Added Days Overdue column -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        // Fetch data from the issue_book collection
                                        $issueBooks = $issueCollection->find();
                                        $tIssueBooks = $tIssueCollection->find();

                                        foreach ($issueBooks as $row) {
                                            displayRow($row);
                                        }
                                        foreach ($tIssueBooks as $row) {
                                            displayRow($row);
                                        }

                                        function displayRow($row) {
                                            $daysOverdue = calculateDaysOverdue($row['booksreturndate']);

                                            echo "<tr>";
                                            echo "<td>" . $row["booksname"] . "</td>";
                                            echo "<td>" . $row["booksissuedate"] . "</td>";
                                            echo "<td>" . $row["booksreturndate"] . "</td>";
                                            echo "<td>" . $row["utype"] . "</td>";
                                            echo "<td>" . $row["name"] . "</td>";
                                            echo "<td>" . $row["username"] . "</td>";
                                            echo "<td>" . $row["email"] . "</td>";
                                            echo "<td>";
                                            echo '<ul>
                                                    <li><a style="color: #fff;" href="fine.php?id=' . $row["_id"] . '&days=' . $daysOverdue . '"><i class="fas fa-undo-alt"></i></a></li>
                                                    <li><a href="delete.php?id=' . $row["_id"] . '"><i class="fas fa-trash"></i></a></li>
                                                  </ul>';
                                            echo "</td>";
                                            echo "<td>" . $daysOverdue . "</td>";
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
include 'inc/footer.php';
                                    }
?>
<script>
$(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
});
</script>
