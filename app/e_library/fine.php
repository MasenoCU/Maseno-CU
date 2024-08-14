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

include 'inc/header.php';
require '../components/db_connection.php'; // Ensure $client is initialized in this file
if(isset($client)){
// Define the fine rate per day
$fineRatePerDay = 5;

// Function to calculate fine based on days past due
function calculateFine($dueDate, $returnDate, $fineRatePerDay) {
    $dueDate = strtotime($dueDate);
    $returnDateTime = strtotime($returnDate);

    // Calculate the difference in seconds
    $difference = $returnDateTime - $dueDate; // Fixed: difference should be returnDate - dueDate

    // Convert seconds to days
    $daysPastDue = floor($difference / (60 * 60 * 24));

    // Calculate fine
    $fine = $daysPastDue * $fineRatePerDay;

    return $fine;
}

?>
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <!-- Your existing code here -->
            <div class="issued-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="rbook-info status">
                            <table id="dtBasicExample" class="table table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>User Type</th>
                                        <th>Email</th>
                                        <th>Books Name</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $mongoClient = $client;
                                    $collection = $mongoClient->library->finezone;

                                    $fines = $collection->find();
                                    foreach ($fines as $row) {
                                        // Calculate the fine
                                        $fine = calculateFine($row['due_date'], $row['return_date'], $fineRatePerDay);
                                        $amount = $fine;

                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row["utype"]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row["booksname"]) . "</td>";
                                        echo "<td>" . htmlspecialchars($amount) . "</td>";
                                        echo "<td><a href='delete-fine.php?id=" . urlencode($row["id"]) . "' style='color: red'><i class='fas fa-trash'></i></a></td>";
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
