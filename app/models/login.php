<?php
function loginlogic($connection) {
    $login_message = '';

    // Check if the request is POST and login is set
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        // Sanitize and retrieve input
        $admission_number = isset($_POST['admission_number']) ? htmlspecialchars(trim($_POST['admission_number'])) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        // Validate user input
        if (empty($admission_number)) {
            return "Admission number cannot be empty.";
        }

        if (empty($password)) {
            return "Password cannot be empty.";
        }

        // Check database connection
        if ($connection) {
            // Prepare SQL query
            $stmt = $connection->prepare("SELECT * FROM users WHERE admission_number = ?");

            if ($stmt) {
                $stmt->bind_param("s", $admission_number); // Bind admission number
                $stmt->execute(); // Execute the query
                $result = $stmt->get_result(); // Get the result

                // Check if the user exists
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc(); // Fetch the user data

                    // Verify the password
                    if (password_verify($password, $user['password'])) {
                        // Start the session and store user data
                        session_start();
                        $_SESSION['admission_number'] = $admission_number;
                        $_SESSION['username'] = $user['username'];

                        // Return empty string to indicate successful login
                        return '';
                    } else {
                        // If password doesn't match
                        $login_message = "Invalid password. Please try again.";
                    }
                } else {
                    // If no user is found with that admission number
                    $login_message = "No user found with that admission number. Please retry.";
                }

                $stmt->close(); // Close the statement
            } else {
                // If the prepared statement fails
                $login_message = "An error occurred while preparing the login query.";
            }
        } else {
            // If the database connection fails
            $login_message = "Could not connect to the database. Please try again later.";
        }
    }

    // Return the login message (if any) to be displayed in the UI
    return $login_message;
}
?>
