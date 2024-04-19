<?php
// to conne3ct to the database replace the value in quotes with the atual values.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mucu_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection for any  errors arising.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

