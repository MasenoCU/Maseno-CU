<?php 
session_start();
require '../components/db_connection.php';
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if($database){
$collection = $database->selectCollection('lib_registration');
$updateResult = $collection->updateOne(
    ['username' => $username],
    ['$set' => [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ]]
);

if ($updateResult->getModifiedCount() > 0) {
    // Redirect to update-details.php with success message
    $_SESSION['success_message'] = "Your details have been updated successfully.";
    header("Location: update-details.php");
    exit();
} else {
    // Redirect to update-details.php with error message
    $_SESSION['error_message'] = "Failed to update details. Please try again.";
    header("Location: update-details.php");
    exit();
}}
?>
