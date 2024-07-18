<?php
require 'app/components/db_connection.php';
require 'app/components/authenticate.php';

use MongoDB\Exception\Exception as MongoDBException;

$signup_message = '';
$login_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        // Registration logic
        $username = htmlspecialchars($_POST['username']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $course = htmlspecialchars($_POST['course']);
        $admission_number = htmlspecialchars($_POST['admission_number']);
        $phone_number = htmlspecialchars($_POST['phone_number']);
        $ministry = htmlspecialchars($_POST['ministry']);
        $year_of_study = htmlspecialchars($_POST['year_of_study']);
        $eve_team = htmlspecialchars($_POST['eve_team']);

        if ($database) {
            $collection = $database->selectCollection('Users');

            try {
                // Insert the new user into the `Users` collection
                $result = $collection->insertOne([
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'course' => $course,
                    'admission_number' => $admission_number,
                    'phone_number' => $phone_number,
                    'ministry' => $ministry,
                    'year_of_study' => $year_of_study,
                    'eve_team' => $eve_team,
                ]);

                if ($result->getInsertedCount() == 1) {
                    $signup_message = "<p>Sign up successful! <a href='#'>Login here</a></p>";
                    // Redirect to thank you page
                    header("Location: thank_you.php");
                    exit;
                } else {
                    $signup_message = "<p>Error: Failed to insert user. <a href='#'>Try again</a></p>";
                    // Redirect to error page
                    header("Location: error.php?message=Failed to insert user");
                    exit;
                }
            } catch (MongoDBException $e) {
                /** @var \Throwable $e */
                $signup_message = "<p>Error: " . $e->getMessage() . "</p>";
                // Redirect to error page with exception message
                header("Location: error.php?message=" . urlencode($e->getMessage()));
                exit;
            }
        } else {
            $signup_message = "<p>Error: Could not connect to the database.</p>";
            // Redirect to error page with database connection error
            header("Location: error.php?message=Could not connect to the database");
            exit;
        }
    }

    if (isset($_POST['login'])) {
        // Login logic
        $username = htmlspecialchars($_POST['username']);
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/e36217afb5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/assets/styles/registrationstyles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <link rel="icon" type="image/x-icon" href="/public/favicon.ico">
    <title>Registration Maseno University Christian Union</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                
                <form action="registrationpage.php" class="sign-in-form" method="post">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Admissionnumber" placeholder="Admission Number" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" name="login" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="registrationpage.php" class="sign-up-form" method="post" enctype="multipart/form-data">
                    <h2 class="title">Register with Us Today!</h2>

                    <!-- Step 1: Name -->
                    <div class="step step-1">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="fullnames" placeholder="Mwangi Kamau" required pattern="[A-Za-z\s]{1,}" title="Please enter a valid name" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Your Email Address" required />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-graduation-cap"></i>
                            <input type="text" name="course" placeholder="Course (e.g., Bsc. Education)" required pattern="[A-Za-z\s.]{1,}" title="Please enter a valid course" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-id-badge"></i>
                            <input type="text" name="admission_number" placeholder="Admission Number" required pattern="\d{1,}" title="Please enter a valid admission number" required />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-phone"></i>
                            <input type="text" name="phone_number" placeholder="Phone Number" required pattern="\d{10,}" title="Please enter a valid phone number" />
                        </div>
                        <button type="button" class="btn next-btn">Next</button>
                    </div>

                    <!-- Step 2: Ministry involvement and year of study -->
                    <div class="step step-2">
                        <label class="titlelabel">Ministry you are currently involved in:</label>
                        <div class="ministries">
                            <button type="button" class="ministry-btn" data-value="Praise and Worship">Praise and Worship</button>
                            <button type="button" class="ministry-btn" data-value="Intercessory">Intercessory</button>
                            <button type="button" class="ministry-btn" data-value="Media and IT">Media And IT</button>
                            <button type="button" class="ministry-btn" data-value="Discipleship">Discipleship Ministry</button>
                            <button type="button" class="ministry-btn" data-value="Instrumentalists">Instrumentalists Ministry</button>
                            <button type="button" class="ministry-btn" data-value="Creative">Creative Ministry</button>
                            <button type="button" class="ministry-btn" data-value="Hospitality">Hospitality Ministry</button>
                            <button type="button" class="ministry-btn" data-value="Choir">Choir Ministry</button>
                            <button type="button" class="ministry-btn" data-value="High School Ministry">High School Ministry</button>
                        </div>
                        <input type="hidden" name="ministry" id="ministry" value="" required />

                        <label class="titlelabel">Year of Study:</label>
                        <div class="yos">
                            <button type="button" class="eve-team-btn" data-value="1">1</button>
                            <button type="button" class="eve-team-btn" data-value="2">2</button>
                            <button type="button" class="eve-team-btn" data-value="3">3</button>
                            <button type="button" class="eve-team-btn" data-value="4">4</button>
                        </div>
                        <input type="hidden" name="year_of_study" id="year_of_study" value="" required />
                        <button type="button" class="btn back-btn">Back</button>
                        <button type="button" class="btn next-btn">Next</button>
                    </div>

                    <!-- Step 3: Eve team -->
                    <div class="step step-3">
                        <label class="titlelabel">Your Eve Team:</label>
                        <div class="eave-teams">
                            <button type="button" class="eve-team-btn" data-value="Central Evangelistic Team">Central Evangelistic Team</button>
                            <button type="button" class="eve-team-btn" data-value="Mubet">Mubet</button>
                            <button type="button" class="eve-team-btn" data-value="Weso">Weso</button>
                            <button type="button" class="eve-team-btn" data-value="Uet">Uet</button>
                            <button type="button" class="eve-team-btn" data-value="Noret">Noret</button>
                            <button type="button" class="eve-team-btn" data-value="Soret">Soret</button>
                            <button type="button" class="eve-team-btn" data-value="Emuseta">Emuseta</button>
                            <button type="button" class="eve-team-btn" data-value="UET">UET</button>
                        </div>
                        <input type="hidden" name="eve_team" id="eve_team" value="" required />
                        <button type="button" class="btn back-btn">Back</button>
                        <button type="button" class="btn next-btn">Next</button>
                    </div>

                    <!-- Step 4: Passwords and file upload -->
                    <div class="step step-4">
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter a Password" required minlength="6" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="confirm_password" placeholder="Confirm the Password" required minlength="6" />
                        </div>
                        <div class="input-field file-field">
                            <label for="schoolId">Please Upload Your School ID:</label>
                            <input type="file" id="schoolId" name="schoolId" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required />
                        </div>
                        <button type="button" class="btn back-btn">Back</button>
                        <input type="submit" class="btn" name="register" value="Register me Now!" />
                    </div>

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
                <img src="/public/assets/images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="/public/assets/scripts/app.js"></script>
</body>
</html>
