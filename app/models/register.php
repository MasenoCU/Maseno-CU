<?php
function registerlogic($connection) {
    $signup_message = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $course = htmlspecialchars($_POST['course']);
        $admission_number = htmlspecialchars($_POST['admission_number']);
        $phone_number = htmlspecialchars($_POST['phone_number']);
        $ministry = htmlspecialchars($_POST['ministry']);
        $year_of_study = htmlspecialchars($_POST['year_of_study']);
        $eve_team = htmlspecialchars($_POST['eve_team']);

        $schoolIdPath = '';
        if (isset($_FILES['schoolId']) && $_FILES['schoolId']['error'] === UPLOAD_ERR_OK) {
            $fileSize = $_FILES['schoolId']['size'];
            $fileType = $_FILES['schoolId']['type'];
            $allowedTypes = ['image/jpeg', 'image/png'];
            $uploadDir = __DIR__ . '/../../backend/uploads/school_Ids/';

            if ($fileSize > 2 * 1024 * 1024) {
                $signup_message = "Error: The file size exceeds the allowed limit of 2MB.";
                header("Location: ../views/error.php?message=" . urlencode($signup_message));
                exit;
            }

            if (!in_array($fileType, $allowedTypes)) {
                $signup_message = "Error: Only JPEG and PNG files are allowed.";
                header("Location: ../views/error.php?message=" . urlencode($signup_message));
                exit;
            }

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0775, true);
            }

            $fileTmpPath = $_FILES['schoolId']['tmp_name'];
            $fileName = basename($_FILES['schoolId']['name']);
            $fileNameClean = uniqid() . '-' . $fileName;

            $schoolIdPath = $uploadDir . $fileNameClean;

            if (move_uploaded_file($fileTmpPath, $schoolIdPath)) {
                $schoolIdPath = 'backend/uploads/school_Ids/' . $fileNameClean;
            } else {
                error_log("Error: Failed to upload School ID. Temp path: $fileTmpPath, Destination: $schoolIdPath");
                $signup_message = "Error: Failed to upload School ID.";
                header("Location: ../views/error.php?message=" . urlencode($signup_message));
                exit;
            }
        } else {
            if (isset($_FILES['schoolId']['error'])) {
                error_log("Upload error: " . $_FILES['schoolId']['error']);
            }
        }

        if ($connection) {
            $stmt = $connection->prepare("INSERT INTO users (username, password, email, course, admission_number, phone_number, ministry, year_of_study, eve_team, school_id_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            if ($stmt) {
                $stmt->bind_param("ssssssssss", $username, $password, $email, $course, $admission_number, $phone_number, $ministry, $year_of_study, $eve_team, $schoolIdPath);

                if ($stmt->execute()) {
                    header("Location: ../views/thank_you.php");
                    exit;
                } else {
                    $signup_message = "Error: Failed to insert user.";
                }

                $stmt->close();
            } else {
                $signup_message = "Error: Could not prepare the SQL statement.";
            }
        } else {
            $signup_message = "Error: Could not connect to the database.";
        }
    }

    return $signup_message;
}
