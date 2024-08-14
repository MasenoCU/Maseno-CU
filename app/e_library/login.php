<?php 
    session_start();
    require '../components/db_connection.php';
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
        .login{
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
    <div class="login registration">
        <div class="wrapper">
            <div class="reg-header text-center">
                <h2>Maseno University Christian Union E-Library</h2>
                <div class="gap-30"></div>
                <div class="gap-30"></div>
            </div>
            <div class="gap-30"></div>
            <div class="login-content">
                <div class="login-body">
                    <h4>Administrator Login </h4>
                    <form action="" method="post">
                        <div class="mb-20">
                            <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
                        </div>
                        <div class="mb-20">
                            <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
                        </div>
                        <div class="mb-20">
                            <input class="btn btn-info submit" type="submit" name="login" value="Login">
                            <!-- Add registration link/button -->
                            <a href="registration.php" class="btn btn-success">Register</a>
                            <!-- End of registration link/button -->
                        </div>
                    </form>
                </div>
                
                <?php 
                    if (isset($_POST["login"]) &&(isset($client))) {
                        $collection = $client->library->std_registration;

                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Query MongoDB for the user
                        $user = $collection->findOne([
                            'username' => $username, 
                            'password' => $password
                        ]);

                        if ($user === null) {
                            // No user found
                            ?>
                            <div class="alert alert-warning">
                                <strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Username Or Password.</span>
                            </div>
                            <?php
                        } else {
                            // User found
                            $_SESSION["username"] = $username;
                            ?>
                            <script type="text/javascript">
                                window.location="dashboard.php";
                            </script>
                            <?php  
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="footer text-center">
        <p>&copy; Maseno University Christian Union E-Library</p>
    </div>

    <script src="inc/js/jquery-2.2.4.min.js"></script>
    <script src="inc/js/bootstrap.min.js"></script>
    <script src="inc/js/custom.js"></script>
</body>
</html>
