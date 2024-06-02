<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../styles/registration.css"/>
    <title>Maseno University Christian Union Registration Page</title>
</head>
<body>
    <div class="container">
        <h2>Maseno University Christian Union Registration</h2>
        <form id="registrationForm" action="processform.php" method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" placeholder="E.g. Jesus" id="firstName" name="firstName" required>

            <label for="otherName">Other Name:</label>
            <input type="text" placeholder="E.g. Christ" id="otherName" name="otherName">

            <label for="admissionNumber">Admission Number:</label>
            <input type="text" placeholder="E.g. CCS/00121/021" id="admissionNumber" name="admissionNumber" required>


            <!-- yearOfStudy -->
            <label class="titlelabel">Year of Study:</label>
            <label class="year-of-study-label">
                <input type="radio" id="firstYear" name="yearOfStudy" value="1">
                1st Year
            </label>
            <label class="year-of-study-label">
                <input type="radio" id="secondYear" name="yearOfStudy" value="2">
                2nd Year
            </label>
            <label class="year-of-study-label">
                <input type="radio" id="thirdYear" name="yearOfStudy" value="3">
                3rd Year
            </label>
            <label class="year-of-study-label">
                <input type="radio" id="fourthYear" name="yearOfStudy" value="4">
                4th Year
            </label>
            <label class="year-of-study-label">
                <input type="radio" id="associate" name="yearOfStudy" value="4">
                Associate
            </label>
            

            <!-- Ministries -->
            <label class="titlelabel">Ministry you are currently involved in:</label>
            <label class="ministry-label">
                <input type="checkbox" id="worship" name="ministry[]" value="[Worship]">
                Praise and Worship
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="Intercessory" name="ministry[]" value="Prayer">
                Intercessory
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="MIT" name="ministry[]" value="Media">
                Media And IT
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="Discipleship" name="ministry[]" value="Discipleship">
                Discipleship Ministry
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="Instrumentalists" name="ministry[]" value="Instrumentalists">
                Instrumentalists Ministry
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="Creative" name="ministry[]" value="Creative">
                Creative Ministry
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="Hospitality" name="ministry[]" value="Hospitality">
                Hospitality Ministry
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="Choir" name="ministry[]" value="Choir">
                Choir Ministry
            </label>
            <label class="ministry-label">
                <input type="checkbox" id="HighS" name="ministry[]" value="HighSchool">
                High School Ministry
            </label>
            

            <label class="titlelabel" for="evTeam">Your EV Team:</label>
            <label>
                <input type="radio" id="cet" name="evTeam" value="CET"> Central Evangelistic Team
            </label>
            <label>
                <input type="radio" id="mubet" name="evTeam" value="Mubet"> Mubet
            </label>
            <label>
                <input type="radio" id="weso" name="evTeam" value="Weso"> Weso
            </label>
            <label>
                <input type="radio" id="uet" name="evTeam" value="Uet"> Uet
            </label>
            <label>
                <input type="radio" id="noret" name="evTeam" value="Noret"> Noret
            </label>
            <label>
                <input type="radio" id="soret" name="evTeam" value="Soret"> Soret
            </label>
            <label>
                <input type="radio" id="emuseta" name="evTeam" value="Emuseta"> Emuseta
            </label>
            <label>
                <input type="radio" id="noneota" name="noneota" value="noneota"> None of the above
            </label>



            <label class="titlelabel" for="gender">Gender:</label>
            <label>
                <input type="radio" id="male" name="gender" value="male"> Male
            </label>
            <label>
                <input type="radio" id="female" name="gender" value="female"> Female
            </label>


            <label class="titlelabel" for="course">Course you are taking:</label>
            <input type="text" id="course" placeholder="E.g. Computer Science" name="course" required>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" placeholder="E.g. 0725221576" name="phoneNumber" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" placeholder="E.g. jesuschrist@gmail.com" name="email" required>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>