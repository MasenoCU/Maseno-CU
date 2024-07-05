<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receive form data
    $firstName = $_POST["firstName"];
    $otherName = $_POST["otherName"];
    $admissionNumber = $_POST["admissionNumber"];
    $yearOfStudy = $_POST["yearOfStudy"];
    $ministries = isset($_POST['ministry']) ? (is_array($_POST['ministry']) ? $_POST['ministry'] : [$_POST['ministry']]) : [];
    $evTeam = $_POST["evTeam"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];

    // Database connection and insertion
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "your_database_name";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to insert data into table
    $sql = "INSERT INTO registration (firstName, otherName, admissionNumber, yearOfStudy, ministries, evTeam, gender, course, phoneNumber, email)
    VALUES ('$firstName', '$otherName', '$admissionNumber', '$yearOfStudy', '" . implode(",", $ministries) . "', '$evTeam', '$gender', '$course', '$phoneNumber', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
