<?php
session_start();
require_once '../models/authenticate.php';
require_once '../models/db_connection.php';
require_once '../models/login.php';
require_once '../models/register.php';
require_once '../../config.php';


$login_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $login_message = loginlogic($connection);
        if (!$login_message) {
            header("Location: homepage.php");
            exit;
        }
    }
    if (isset($_POST['register'])) {
        $register_message = registerlogic($connection);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- <base href="https://masenocu.org/developer/"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/e36217afb5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/style.css">
    <link rel="stylesheet" href="/<?php echo BASE_URL; ?>assets/styles/registrationstyles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/<?php echo BASE_URL; ?>favicon.ico">
    <title>Registration Maseno University Christian Union</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                
                <form action="" class="sign-in-form" method="post">
                    <h2 class="title">Login</h2>

                    <?php if (!empty($login_message)): ?>
                        <div class="alert alert-danger" role="alert" id="loginError">
                            <?php echo $login_message; ?>
                        </div>
                    <?php endif; ?>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="admission_number" placeholder="Admission Number" required pattern="[A-Za-z0-9/]+" required />
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

                <form action="" class="sign-up-form" method="post" enctype="multipart/form-data">
                    <h2 class="title">Register with Us Today!</h2>

                    <!-- Step 1: Name -->
                    <div class="step step-1">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="username" placeholder="John Doe" required pattern="[A-Za-z\s]{1,}" title="Please enter a valid name" />
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
                            <input type="text"  id="step1-admission-number" name="admission_number" placeholder="Admission Number" required pattern="[A-Za-z0-9/]+" title="Please enter a valid admission number" required />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-phone"></i>
                            <input type="text" name="phone_number" placeholder="Phone Number" required pattern="\d{10,}" title="Please enter a valid phone number" />
                        </div>
                        <button type="button" class="btn next-btn" disabled >Next</button>
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
                <img src="/<?php echo BASE_URL; ?>assets/images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="/<?php echo BASE_URL; ?>assets/scripts/app.js"></script>
</body>
</html>
