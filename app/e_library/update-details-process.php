<?php 
    session_start();
    include 'inc/connection.php';

    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }

    // Retrieve user inputs from the form
    $username = $_SESSION["username"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Update user details in the database
    $query = "UPDATE lib_registration SET name='$name', email='$email', phone='$phone' WHERE username='$username'";
    $result = mysqli_query($link, $query);

    if ($result) {
        // Redirect to update-details.php with success message
        $_SESSION['success_message'] = "Your details have been updated successfully.";
        header("Location: update-details.php");
        exit();
    } else {
        // Redirect to update-details.php with error message
        $_SESSION['error_message'] = "Failed to update details. Please try again.";
        header("Location: update-details.php");
        exit();
    }
?>
