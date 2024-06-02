<?php



// Retrieve form data
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


echo $firstName . ", your details have been received successfully. Thanks for being a member";

echo "First Name: " . $firstName . "<br>";
echo "Other Name: " . $otherName . "<br>";
echo "Admission Number: " . $admissionNumber . "<br>";
echo "Year of Study: " . $yearOfStudy . "<br>";

echo "EV Team: " . $evTeam . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Course: " . $course . "<br>";
echo "Phone Number: " . $phoneNumber . "<br>";
echo "Email: " . $email . "<br>";

?>