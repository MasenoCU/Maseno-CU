<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database_name = 'masenocu';

$connection = new mysqli($host, $username, $password, $database_name);

if ($connection->connect_error) {
    error_log("Database connection error: " . $connection->connect_error);
    echo  'Connected successfully';
    exit('Database connection failed.');
}

function fetchTableData($connection, $tableName) {
    $data = [];
    try {
        $query = "SELECT * FROM $tableName";
        $result = $connection->query($query);

        if ($result) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            error_log("Error fetching data from table $tableName: " . $connection->error); // Log error message
        }
    } catch (Exception $e) {
        error_log("Error fetching data from table $tableName: " . $e->getMessage()); // Log error message
    }
    return $data;
}

$leaders = fetchTableData($connection, 'Leadership');
$faqs = fetchTableData($connection, 'FAQs');
$contacts = fetchTableData($connection, 'Contacts');
$events = fetchTableData($connection, 'Events');
$blogs = fetchTableData($connection, 'Blogs');
$aboutDetails = fetchTableData($connection, 'AboutUs');

//reuseable function to fetch eveteam details.
if (!function_exists('fetchEveTeamData')){
    function fetchEveTeamData($connection, $team_name){
        $sql = "SELECT history, mandate, vision, mission, membership, motto, motto_verse, activities, team_logo FROM eveteam WHERE team_name = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s", $team_name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}

