<?php
function loginlogic($connection) {
    $login_message = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $admission_number = isset($_POST['admission_number']) ? htmlspecialchars($_POST['admission_number']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

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
                        return ''; // No error message, indicating success
                    } else {
                        $login_message = "Invalid admission number or password.";
                    }
                } else {
                    $login_message = "No user found with that admission number.";
                }

                $stmt->close();
            } else {
                $login_message = "Error: Could not prepare the SQL statement.";
            }
        } else {
            $login_message = "Error: Could not connect to the database.";
        }
    }

    return $login_message; // Return any login message to be displayed
}
?>
