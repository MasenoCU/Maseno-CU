<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUCU WEB</title>

    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/mediaquaries.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../new/all.min.css">
    <link rel="stylesheet" href="../new/fontawesome.min.css">
    <link rel="stylesheet" href="../styles/ministries.css">


</head>

<body>
    <!--Navigation bar for desktop view-->
    <nav id="desktop-nav">
        <div class="nav-container">
            <div class="left-section">
                <div class="logo-picture">
                    <img id="logo-picture" src="assets/NEW LOGO.png">
                    <img id="logo-picture2" src="assets/muculogo3.png">
                </div>


            </div>
            <div class="right-section">
                <ul class="nav-links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">BLOGS</a></li>
                    <li><a href="#" onclick="toggleMenu()">LEADERSHIP & COMMITTEES</a></li>
                    <li><a href="#">EV.TEAMS</a></li>
                    <li><a href="ministries.php">MINISTRIES</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>

            </div>
        </div>



        <!--HumbegerMenu for mobileview-->


    </nav>
    <nav id="humberger-nav">
        <div class="logo">
            <img id="logo-picture3" src="assets/NEW LOGO.png">

        </div>
        <div class="humberger-menu">
            <div class="humberger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>

            </div>
            <div class="menu-links">
                <li><a href="#" onclick="toggleMenu()">HOME</a></li>
                <li><a href="#" onclick="toggleMenu()">ABOUT US</a></li>
                <li><a href="#" onclick="toggleMenu()">BLOGS</a></li>
                <li><a href="#" onclick="toggleMenu()">EV.TEAMS</a></li>
                <li><a href="#" onclick="toggleMenu()">MINISTRIES</a></li>
                <li class="contact-us"><a href="#" onclick="toggleMenu()"> CONTACT US</a></li>

            </div>
        </div>
    </nav>
    <section class="main-section">

        <div class="container">
            <h1 class="heading">MINISTRIES</h1>
            <div class="card-container">
                <?php
      require 'components/db_connection.php';
      try{
        $error="Cannot connect to the database";
        if ($database){
            $collection =$database->selectCollection('Ministries');
            $ministries=$collection->find();

            $hasMinistries =false;
            foreach($ministries as $ministry){
                $hasMinistries =true;
                echo '<div class="card">';
                echo '<img src="../assets/image.jpg">';
                echo '<div class="card-content">';
                echo '<h3>' . $ministry["ministryName"] . '</h3>';
                echo '<p>' . $ministry["description"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            if(!$hasMinistries){
                echo"<p> No Ministries Fetched to Display</p>";
            }
        }else{
            echo $error;
        }
      } catch (MongoDB\Exception\Exception $e){
        /** @var \Throwable $e */
        echo "MongoDB Error: " . $e->getMessage(). "\n";
      }
      ?>
            </div>
        </div>

    </section>


    <!---Footer Start----->
    <div class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h2>About Us</h2>
                <a href="#">Affiliation and Governance</a>
                <a href="#">Our vision,mission,Goals and Objectives</a>
                <a href="#">Membership</a>
                <a href="#">Doctrinal Basis</a>
                <a href="#">Establishement</a>

            </div>
            <div class="footer-heading footer-2">
                <h2>Evangelistic Teams</h2>
                <div class="eve-teams">
                    <a href="#">MUBET</a>
                    <a href="#">CET</a>
                    <a href="#">NET</a>
                    <a href="#">WESO</a>
                    <a href="#">UET</a>
                    <a href="#">NORET</a>
                    <a href="#">EMUSETA</a>
                    <a href="#">SORET</a>
                </div>





            </div>

            <div class="footer-email-form">
                <h2 class="join-us-heading">JOIN US</h2>
                <input type="email" placeholder="Enter your email address" id="footer-email"></input>
                <input type="submit" value="Sign-Up" id="footer-email-btn">

            </div>

        </div>
        <hr class="my-4">
        <div class="social-handles">
            <div>
                <h4>Follow Us</h4>
                <p>Connect with us on social media for updates</p>
                <ul class="social-icons">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-tiktok"></i></a></li>

                </ul>
            </div>
        </div>

    </div>
    <!----Footer End----->


    <script src="script.js"></script>
</body>

</html>