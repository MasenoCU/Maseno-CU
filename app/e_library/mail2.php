<?php
    // Assuming you're fetching the user's email from MongoDB before sending the email
    require '../components/db_connection.php';// Ensure this file initializes $client

 // Retrieve the user ID from the URL
if(isset($client)){
    // Access the 'std_registration' collection in the 'library' database
    $id = $_GET["id"];
    $collection = $client->library->std_registration;

    // Find the document by the given id
    $user = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

    if ($user) {
        $email = $user['email'];

        require "phpmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer;

        // $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                          // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                  // Enable SMTP authentication
        $mail->Username = 'parttimemail18@gmail.com';            // SMTP username
        $mail->Password = 'ItsSecret';                           // SMTP password
        $mail->SMTPSecure = 'tls';                               // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                       // TCP port to connect to

        $mail->setFrom('parttimemail18@gmail.com', 'mamun');
        $mail->addAddress($email);                               // Add the recipient's email from the database
        $mail->addReplyTo('parttimemail18@gmail.com');

        $mail->isHTML(true);                                     // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
        } else {
            echo 'Message has been sent';
        }
    } else {
        echo "User not found";
    }}
?>
