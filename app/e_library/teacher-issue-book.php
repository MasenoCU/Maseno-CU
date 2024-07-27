<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

include 'inc/connection.php';

// Function to log book issuing transaction
function logTransaction($link, $username, $bookName)
{
    $logMessage = "User '$username' issued book '$bookName'.";
    // Log the transaction to database
    $query = "INSERT INTO transaction_logs (username, book_name) VALUES ('$username', '$bookName')";
    mysqli_query($link, $query);
}

// Function to sanitize input data to prevent SQL injection attacks
function sanitizeInput($link, $data)
{
    return mysqli_real_escape_string($link, $data);
}

// Function to display error message
function displayError($message)
{
    echo '<div class="alert alert-danger">' . $message . '</div>';
}

// Initialize variables
$rdate = date("d/m/Y", strtotime("+30 days"));
$errorMessage = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input data
    $name = sanitizeInput($link, $_POST["name"]);
    $teaches = sanitizeInput($link, $_POST["teaches"]);
    $phone = sanitizeInput($link, $_POST["phone"]);
    $email = sanitizeInput($link, $_POST["email"]);
    $booksName = sanitizeInput($link, $_POST["booksname"]);
    $booksIssueDate = sanitizeInput($link, $_POST["booksissuedate"]);
    $booksReturnDate = sanitizeInput($link, $_POST["booksreturndate"]);
    $username = $_SESSION["username"];

    // Check if the book is available
    $availabilityQuery = "SELECT books_availability FROM add_book WHERE books_name = '$booksName'";
    $availabilityResult = mysqli_query($link, $availabilityQuery);
    $row = mysqli_fetch_assoc($availabilityResult);
    $availability = $row['books_availability'];

    if ($availability == 0) {
        $errorMessage = "This book is not available.";
    } else {
        // Issue the book and update availability
        $issueQuery = "INSERT INTO t_issuebook (utype, idno, name, teaches, phone, email, books_name, books_issuedate, books_returndate, tusername) VALUES ('Teacher', '', '$name', '$teaches', '$phone', '$email', '$booksName', '$booksIssueDate', '$booksReturnDate', '$username')";
        mysqli_query($link, $issueQuery);

        // Update book availability
        $updateQuery = "UPDATE add_book SET books_availability = books_availability - 1 WHERE books_name = '$booksName'";
        mysqli_query($link, $updateQuery);

        // Log the transaction
        logTransaction($link, $username, $booksName);

        // Redirect to the same page to clear POST data
        header("Location: teacher-issue-book.php");
        exit;
    }
}

include 'inc/header.php';
?>

<!-- Dashboard area -->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>Dashboard</span> Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i> Home</a>
                        <span class="disabled"> Teacher Issue Book</span>
                    </div>
                </div>
            </div>
            <div class="issueBook">
                <div class="row">
                    <div class="col-md-6">
                        <div class="issue-wrapper">
                            <form action="" method="post">
                                <!-- Form fields for issuing book to teacher -->
                                <table class="table table-bordered">
                                    <tr>
                                        <td><input type="text" class="form-control" name="name" placeholder="Teacher Name" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="teaches" placeholder="Subject Taught" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="phone" placeholder="Phone Number" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="email" placeholder="Email Address" required></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="booksname" class="form-control" required>
                                            <option value="" disabled selected>Select Book</option>
                                            <?php 
                                                $bookQuery = "SELECT books_name FROM add_book";
                                                $bookResult = mysqli_query($link, $bookQuery);
                                                while($row = mysqli_fetch_assoc($bookResult)) {
                                                    echo "<option>" . $row['books_name'] . "</option>";
                                                }
                                            ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="booksissuedate" placeholder="Books Issue Date" value="<?php echo date("d/m/Y"); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="booksreturndate" placeholder="Books Return Date" value="<?php echo $rdate; ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="submit2" class="btn btn-info" value="Issue Book"></td>
                                    </tr>
                                </table>

                            </form>
                            <?php
                            if ($errorMessage) {
                                displayError($errorMessage);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
