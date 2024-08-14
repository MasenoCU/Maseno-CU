<?php
require '../components/db_connection.php'; // MongoDB connection file

use MongoDB\BSON\ObjectId; // Import the ObjectId class

// Function to calculate late fee
function calculateLateFee($return_date, $due_date, $late_fee_per_day) {
    $diff = strtotime($return_date) - strtotime($due_date);
    $days_late = floor($diff / (60 * 60 * 24));
    return max(0, $days_late) * $late_fee_per_day;
}

if ($database) {
    $id = $_GET["id"];
    $return_date = date("d/m/Y");
    $fine = 50;
    
    // Retrieve book details from MongoDB
    $collection = $database->selectCollection('t_issuebook');
    $query = ['_id' => new ObjectId($id)];
    $book = $collection->findOne($query);
    
    if ($book) {
        $username = $book->username;
        $utype = $book->utype;
        $email = $book->email;
        $booksname = $book->booksname;
        $due_date = $book->booksreturndate;
    }
    
    // Calculate late fee
    $late_fee = calculateLateFee($return_date, $due_date, 1); // Assuming late fee is $1 per day
    
    // Insert into finezone if returned after due date
    if (strtotime($return_date) > strtotime($due_date)) {
        $finezoneCollection = $database->selectCollection('finezone');
        $finezoneCollection->insertOne([
            'username' => $username,
            'utype' => $utype,
            'email' => $email,
            'booksname' => $booksname,
            'fine' => $fine
        ]);
    }
    
    // Update return date in t_issuebook and issue_book collections
    $tIssueBookCollection = $database->selectCollection('t_issuebook');
    $tIssueBookCollection->updateOne(
        ['_id' => new ObjectId($id)],
        ['$set' => ['booksreturndate' => $return_date, 'return_status' => 'returned', 'late_fee' => $late_fee]]
    );
    
    $issueBookCollection = $database->selectCollection('issue_book');
    $issueBookCollection->updateOne(
        ['_id' => new ObjectId($id)],
        ['$set' => ['booksreturndate' => $return_date]]
    );
    
    // Update book availability
    $addBookCollection = $database->selectCollection('add_book');
    $addBookCollection->updateOne(
        ['books_name' => $booksname],
        ['$inc' => ['books_availability' => 1]]
    );
    
    // Redirect to issued-books.php after processing return
    header("Location: issued-books.php");
    exit();
}
