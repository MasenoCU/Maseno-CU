<?php
 require '../components/db_connection.php';// Ensure this file initializes $client

    if(isset($client)){
    $id = $_GET["id"];

    // Access the 'std_registration' collection in the 'library' database
    $collection = $client->library->std_registration;

    // Find the document by the given id
    $user = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

    if ($user) {
        $email = $user['email'];

        $to = "$email";
        $subject = "Account Confirmation";
        $message = "Your account is approved. Now you can log in to your account.";
        $headers = "From: parttimemail18@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Mail sent successfully";
        } else {
            echo "Mail couldn't be sent";
        }
    } else {
        echo "User not found";
    }}
?>
