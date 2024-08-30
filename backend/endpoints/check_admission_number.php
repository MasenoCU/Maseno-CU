<?php
require_once '/../../app/models/db_connection.php';

if (isset($_POST['admission_number'])) {
    $admission_number = htmlspecialchars($_POST['admission_number']);

    if ($connection) {
        $stmt = $connection->prepare("SELECT * FROM users WHERE admission_number = ?");
        $stmt->bind_param("s", $admission_number);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode(['exists' => true]);
        } else {
            echo json_encode(['exists' => false]);
        }

        $stmt->close();
    } else {
        echo json_encode(['error' => 'Database connection failed']);
    }
} else {
    echo json_encode(['error' => 'Admission number not provided']);
}
