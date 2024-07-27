<?php 
    session_start();
    if (!isset($_SESSION["username"])) {
        ?>
        <script type="text/javascript">
            window.location="login.php";
        </script>
        <?php
    }
    $page = 'ibook';
    include 'inc/header.php';
    include 'inc/connection.php';

    // Function to calculate days overdue
    function calculateDaysOverdue($returnDate) {
        $returnDate = strtotime($returnDate);
        $currentDate = time();

        // Calculate the difference in seconds
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
                                            $res = mysqli_query($link, "SELECT * FROM issue_book");
                                            $res2 = mysqli_query($link, "SELECT * FROM t_issuebook");
                                            while ($row = mysqli_fetch_array($res)) {
                                                displayRow($row);
                                            }
                                            while ($row = mysqli_fetch_array($res2)) {
                                                displayRow($row);
                                            }

                                            function displayRow($row) {
                                                // Calculate days overdue
                                                $daysOverdue = calculateDaysOverdue($row['booksreturndate']);

                                                echo "<tr>";
                                                echo "<td>"; echo $row["booksname"]; echo "</td>";
                                                echo "<td>"; echo $row["booksissuedate"]; echo "</td>";
                                                echo "<td>"; echo $row["booksreturndate"]; echo "</td>";
                                                echo "<td>"; echo $row["utype"]; echo "</td>";
                                                echo "<td>"; echo $row["name"]; echo "</td>";
                                                echo "<td>"; echo $row["username"]; echo "</td>";
                                                echo "<td>"; echo $row["email"]; echo "</td>";
                                                echo "<td>";
                                                ?>
                                                <ul>
                                                    <li><a style="color: #fff;" href="fine.php?id=<?php echo $row["id"]; ?>&days=<?php echo $daysOverdue; ?>"><i class="fas fa-undo-alt"></i></a></li>
                                                    <li><a href="delete.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></li>
                                                </ul> 
                                                <?php 
                                                echo "</td>";
                                                echo "<td>"; echo $daysOverdue; echo "</td>"; // Display days overdue
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
     ?>
     <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
