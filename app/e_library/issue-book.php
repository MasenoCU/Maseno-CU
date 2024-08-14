<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["teacher"])) {
    header("Location: login.php");
    exit();
}
require '../components/db_connection.php';
if(isset($client)){
// Include MongoDB connection
 // Ensure this file initializes $client

// Access the library database and the books collection
$mongoClient = $client;
$db = $mongoClient->library;
$booksCollection = $db->books;
$issueCollection = $db->t_issuebook;

// Check if form is submitted
if (isset($_POST["issue_book"])) {
    $bookname = $_POST['bookname'];

    // Check if bookname is provided
    if (empty($bookname)) {
        $error = "Please select a book.";
    } else {
        // Check if the selected book is available
        $check_query = ['title' => $bookname, 'availability' => 'available'];
        $book = $booksCollection->findOne($check_query);

        if ($book) {
            // Insert record into t_issuebook collection
            $issueData = [
                'username' => $_SESSION['teacher'],
                'booksname' => $bookname,
                'booksissuedate' => new MongoDB\BSON\UTCDateTime(),
                'return_status' => 'pending'
            ];
            $result = $issueCollection->insertOne($issueData);

            if ($result->getInsertedCount() > 0) {
                // Update book availability to 'issued'
                $update_query = ['title' => $bookname];
                $update_data = ['$set' => ['availability' => 'issued']];
                $booksCollection->updateOne($update_query, $update_data);

                // Book issued successfully
                $success_msg = "Book issued successfully.";
            } else {
                // Error in issuing book
                $error = "Error issuing book. Please try again.";
            }
        } else {
            // Book not available
            $error = "Selected book is not available.";
        }
    }
}

// Fetch available books from the database
$books_query = ['availability' => 'available'];
$books_result = $booksCollection->find($books_query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Issue Book</title>
    <!-- Include CSS files here -->
</head>
<body>
    <h1>Issue Book</h1>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <?php if (isset($success_msg)): ?>
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    <?php endif; ?>
    <form action="issue-book.php" method="post">
        <label for="bookname">Select Book:</label>
        <select name="bookname" id="bookname">
            <?php foreach ($books_result as $row): ?>
                <option value="<?php echo htmlspecialchars($row['title']); ?>"><?php echo htmlspecialchars($row['title']); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="issue_book">Issue Book</button>
    </form>
</body>
</html>
