<?php 
    include 'inc/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maseno University Christian Union E-Library</title>
    <link rel="stylesheet" href="inc/css/bootstrap.min.css">
    <link rel="stylesheet" href="inc/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="inc/css/pro1.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <style>
        .registration{
            background-image: url(inc/img/3.jpg);
            margin-bottom: 30px;
            padding: 50px;
            padding-bottom: 70px;
        }
        .reg-header h2{
            color: #DDDDDD;
            z-index: 999999;
        }
        .login-body h4{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="registration">
        <div class="reg-wrapper">
            <div class="reg-header text-center">
                <h2>Maseno University Christian Union E-Library</h2>
            </div>
            <div class="gap-40"></div>
            <div class="reg-body">
                <h4 style="text-align: center; margin-bottom: 25px;">Librarian registration form</h4>
                <form action="" class="form-inline" method="post">
                    <div class="form-group">
                        <label for="name" class="text-right">Name <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="Your Name" name="name" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="username">Username <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="Username" name="username" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="password">Password <span>*</span></label>
                        <input type="password" class="form-control custom" placeholder="Password" name="password" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="email">Email <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="Email" name="email" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="phone">Phone No <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="Phone No" name="phone" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="address">Address <span>*</span></label>
                        <textarea name="address" id="address"  class="form-control custom" placeholder="Your address"></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Register" class="btn change" name="submit">
                    </div>
                </form>
            </div>
            <?php 
                if (isset($_POST["submit"])) {
                    // Your registration logic goes here
                    $name = $_POST["name"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $address = $_POST["address"];
                    // You should add validation and sanitization for user input before using it in SQL queries
                    
                    // Sample query to insert data into database
                    $query = "INSERT INTO lib_registration (name, username, password, email, phone, address) VALUES ('$name', '$username', '$password', '$email', '$phone', '$address')";
                    $result = mysqli_query($link, $query);
                    
                    if ($result) {
                        // Registration successful, display success message and redirect to login page after 3 seconds
                        ?>
                        <div class="alert alert-success col-lg-6">
                            Registration successful. Redirecting to login page...
                        </div>
                        <script>
                            setTimeout(function() {
                                window.location.href = "login.php";
                            }, 3000);
                        </script>
                        <?php
                    } else {
                        // Registration failed, display error message
                        ?>
                        <div class="alert alert-danger col-lg-6">
                            Registration failed. Please try again later.
                        </div>
                        <?php
                    }
                }
             ?>
        </div>
    </div>
    <!-- Your footer section goes here -->
</body>
</html>
