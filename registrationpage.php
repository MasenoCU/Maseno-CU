<?php
require 'components/db_connection.php';
require 'components/authenticate.php';

use MongoDB\Exception\Exception as MongoDBException;

$signup_message = '';
$login_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        // Registration logic
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
        $email = $_POST['email'];

        if ($database) {
            $collection = $database->selectCollection('Users');

            try {
                // Insert the new user into the `Users` collection
                $result = $collection->insertOne([
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                ]);

                if ($result->getInsertedCount() == 1) {
                    $signup_message = "<p>Sign up successful! <a href='#'>Login here</a></p>";
                } else {
                    $signup_message = "<p>Error: Failed to insert user. <a href='#'>Try again</a></p>";
                }
            } catch (MongoDBException $e) {
                /** @var \Throwable $e */
                $signup_message = "<p>Error: " . $e->getMessage() . "</p>";
            }
        } else {
            $signup_message = "<p>Error: Could not connect to the database.</p>";
        }
    }

    if (isset($_POST['login'])) {
        // Login logic
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            if ($database) {
                $collection = $database->selectCollection('Users');
                $user = $collection->findOne(['username' => $username]);

                if ($user && password_verify($password, $user['password'])) {
                    // Set session variables
                    $_SESSION['username'] = $username;
                    // Redirect to home page
                    header("Location: homepage.php");
                    exit;
                } else {
                    $login_message = "<p>Invalid username or password. <a href='#'>Try again</a></p>";
                }
            } else {
                $login_message = "<p>Error: Could not connect to the database.</p>";
            }
        } catch (MongoDBException $e) {
            /** @var \Throwable $e */
            $login_message = "<p>Error: " . $e->getMessage() . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e36217afb5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/styles/registrationstyles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <title>Maseno University Christian Union</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Login Form -->
                <form action="" class="sign-in-form" method="post">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" name="login" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <?php echo $login_message; ?>
                </form>

                <!-- Registration Form -->
                <form action="" class="sign-up-form" method="post">
                    <h2 class="title">Register with Us Today!</h2>

                    <!-- Step 1: Name -->
                    <div class="step step-1">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="username" placeholder="Username" required />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Your Email Address" required />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <input type="submit" name="register" value="Register" class="btn solid" />
                    </div>
                    <?php echo $signup_message; ?>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3 class="cuthemeformat">Don't have an account with the <span>Christian Union?</span></h3>
                    <p>Become a member by registering today!</p>
                    <button class="btn transparent" id="sign-up-btn">Register</button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already a member?</h3>
                    <p class="cuthemeformat">Login to access the <span>Christian Union</span> Modules</p>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>
