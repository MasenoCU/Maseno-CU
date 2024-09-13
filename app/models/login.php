<?php
function loginlogic($connection) {
    $login_message = '';

    // Check if the request is POST and login is set
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        // Sanitize and retrieve input
        $admission_number = isset($_POST['admission_number']) ? htmlspecialchars(trim($_POST['admission_number'])) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';
        if (empty($admission_number)) {
            return "Admission number cannot be empty.";
        }
        if (empty($password)) {
            return "Password cannot be empty.";
        }
        if ($connection) {
            $stmt = $connection->prepare("SELECT * FROM users WHERE admission_number = ?");

            if ($stmt) {
                $stmt->bind_param("s", $admission_number);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc(); 
                    if (password_verify($password, $user['password'])) {
                        session_start();
                        $_SESSION['admission_number'] = $admission_number;
                        $_SESSION['username'] = $user['username'];
                        return '';
                    } else {
                        $login_message = "Invalid password. Please try again.";
                    }
                } else {
                    $login_message = "No user found with that admission number. Please retry.";
                }
                $stmt->close();
            } else {
                $login_message = "An error occurred while preparing the login query.";
            }
        } else {
            $login_message = "Could not connect to the database. Please try again later.";
        }
    }
    return $login_message;
}
?>
