<?php
session_start();
require '../components/db_connection.php';
if(($database) && (isset($client))){
// Redirect to login page if user is not logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

function logTransaction($collection, $username, $bookName)
{
    $logMessage = "User '$username' issued book '$bookName'.";
    // Log the transaction to MongoDB
    $collection->insertOne([
        'username' => $username,
        'book_name' => $bookName,
        'timestamp' => new MongoDB\BSON\UTCDateTime()
    ]);
}

// Function to sanitize input data (not necessary with MongoDB but kept for uniformity)
function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags($data));
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
    $name = sanitizeInput($_POST["name"]);
    $teaches = sanitizeInput($_POST["teaches"]);
    $phone = sanitizeInput($_POST["phone"]);
    $email = sanitizeInput($_POST["email"]);
    $booksName = sanitizeInput($_POST["booksname"]);
    $booksIssueDate = sanitizeInput($_POST["booksissuedate"]);
    $booksReturnDate = sanitizeInput($_POST["booksreturndate"]);
    $username = $_SESSION["username"];

    // Check if the book is available
    $bookCollection = $database->selectCollection('add_book');
    $book = $bookCollection->findOne(['books_name' => $booksName]);

    if ($book['books_availability'] == 0) {
        $errorMessage = "This book is not available.";
    } else {
        // Issue the book and update availability
        $issueCollection = $database->selectCollection('t_issuebook');
        $issueCollection->insertOne([
            'utype' => 'Teacher',
            'idno' => '',
            'name' => $name,
            'teaches' => $teaches,
            'phone' => $phone,
            'email' => $email,
            'books_name' => $booksName,
            'books_issuedate' => $booksIssueDate,
            'books_returndate' => $booksReturnDate,
            'tusername' => $username
        ]);

        // Update book availability
        $bookCollection->updateOne(
            ['books_name' => $booksName],
            ['$inc' => ['books_availability' => -1]]
        );

        // Log the transaction
        $logCollection = $database->selectCollection('transaction_logs');
        logTransaction($logCollection, $username, $booksName);

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
                                                $bookCollection = $database->selectCollection('add_book');
                                                $books = $bookCollection->find([], ['projection' => ['books_name' => 1]]);
                                                foreach ($books as $book) {
                                                    echo "<option>" . $book['books_name'] . "</option>";
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

<?php include 'inc/footer.php'; 
}
?>
