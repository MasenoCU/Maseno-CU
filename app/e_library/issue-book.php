<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["teacher"])) {
    header("Location: login.php");
    exit();
}

// Include database connection
include 'inc/connection.php';

// Check if form is submitted
if (isset($_POST["issue_book"])) {
    $bookname = $_POST['bookname'];

    // Check if bookname is provided
    if (empty($bookname)) {
        $error = "Please select a book.";
    } else {
        // Check if the selected book is available
        $check_query = "SELECT * FROM books WHERE title = '$bookname' AND availability = 'available'";
        $check_result = mysqli_query($link, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            // Insert record into t_issuebook table
            $query = "INSERT INTO t_issuebook (username, booksname, booksissuedate, return_status) 
                      VALUES ('$_SESSION[teacher]', '$bookname', NOW(), 'pending')";
            $result = mysqli_query($link, $query);

            if ($result) {
                // Update book availability to 'issued'
                $update_query = "UPDATE books SET availability = 'issued' WHERE title = '$bookname'";
                mysqli_query($link, $update_query);

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

// Fetch available books from database
$books_query = "SELECT * FROM books WHERE availability = 'available'";
$books_result = mysqli_query($link, $books_query);

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
            <?php while ($row = mysqli_fetch_assoc($books_result)): ?>
                <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
            <?php endwhile; ?>
        </select>
        <button type="submit" name="issue_book">Issue Book</button>
    </form>
</body>
</html>
