<?php 
include 'inc/connection.php';

// Function to calculate late fee
function calculateLateFee($return_date, $due_date, $late_fee_per_day) {
    $diff = strtotime($return_date) - strtotime($due_date);
    $days_late = floor($diff / (60 * 60 * 24));
    return max(0, $days_late) * $late_fee_per_day;
}

$id = $_GET["id"];
$return_date = date("d/m/Y");
$fine = 50;

// Retrieve book details
$res = mysqli_query($link, "SELECT * FROM t_issuebook WHERE id = $id");
while ($row = mysqli_fetch_array($res)) {
    $username = $row["username"];
    $utype = $row["utype"];
    $email = $row["email"];
    $booksname = $row["booksname"];
    $due_date = $row["booksreturndate"];
}

// Calculate late fee
$late_fee = calculateLateFee($return_date, $due_date, 1); // Assuming late fee is $1 per day

// Insert into finezone if returned after due date
if (strtotime($return_date) > strtotime($due_date)) {
    mysqli_query($link, "INSERT INTO finezone (username, utype, email, booksname, fine) VALUES ('$username', '$utype', '$email', '$booksname', '$fine')");
}

// Update return date in t_issuebook and issue_book tables
mysqli_query($link, "UPDATE t_issuebook SET booksreturndate = '$return_date', return_status = 'returned', late_fee = $late_fee WHERE id = $id");
mysqli_query($link, "UPDATE issue_book SET booksreturndate = '$return_date' WHERE id = $id");

// Update book availability
mysqli_query($link, "UPDATE add_book SET books_availability = books_availability + 1 WHERE books_name = '$booksname'");

// Redirect to issued-books.php after processing return
header("Location: issued-books.php");
exit();
?>
