<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
    <?php
    exit();
}

include 'inc/header.php';
require '../components/db_connection.php';// MongoDB connection
include 'inc/function.php';
?>

<!-- Dashboard area -->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>dashboard</span> Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i> home</a>
                        <a href="add-teacher.php"><i class="fas fa-user"></i> add teacher</a>
                        <span class="disabled">add student</span>
                    </div>
                </div>
            </div>
            <div class="addUser">
                <div class="gap-40"></div>
                <div class="reg-body user-content">
                    <?php if (isset($s_msg)): ?>
                        <span class="success"><?php echo $s_msg; ?></span>
                    <?php endif ?>
                    <?php if (isset($error_m)): ?>
                        <span class="error"><?php echo $error_m; ?></span>
                    <?php endif ?>
                    <h4 style="text-align: center; margin-bottom: 25px;">Student registration form</h4>
                    <form action="" class="form-inline" method="post">
                        <div class="form-group">
                            <label for="name" class="text-right">Name <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Your Name" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="username">Username <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Username" name="username"/>
                        </div>
                        <?php if (isset($error_ua)): ?>
                            <span class="error"><?php echo $error_ua; ?></span>
                        <?php endif ?>
                        <?php if (isset($error_uname)): ?>
                            <span class="error"><?php echo $error_uname; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="password">Password <span>*</span></label>
                            <input type="password" class="form-control custom" placeholder="Password" name="password"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Email" name="email"/>
                        </div>
                        <?php if (isset($e_msg)): ?>
                            <span class="error"><?php echo $e_msg; ?></span>
                        <?php endif ?>
                        <?php if (isset($error_email)): ?>
                            <span class="error"><?php echo $error_email; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="phone">Phone No <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Phone No" name="phone"/>
                        </div>
                        <?php if (isset($error_phone)): ?>
                            <span class="error"><?php echo $error_phone; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="sem">Select Year of Study <span>*</span></label>
                            <select class="form-control custom" name="sem">
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dept">School <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Arts and Social Sciences" name="School" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="session">Session <span>*</span></label>
                            <select class="form-control custom" name="sem">
                                <option>Year 1 Sem 1</option>
                                <option>Year 1 Sem 2</option>
                                <option>Year 2 Sem 1</option>
                                <option>Year 2 Sem 2</option>
                                <option>Year 3 Sem 1</option>
                                <option>Year 3 Sem 2</option>
                                <option>Year 4 Sem 1</option>
                                <option>Year 4 Sem 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="regno">Registration No <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Registration No" name="regno"/>
                        </div>
                        <?php if (isset($error_reg)): ?>
                            <span class="error"><?php echo $error_reg; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="address">Address <span>*</span></label>
                            <textarea name="address" id="address" class="form-control custom" placeholder="Your address"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Add Student" name="submit" class="btn change text-center">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="gap-40"></div>
<?php 
include 'inc/footer.php';
?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sem = $_POST['sem'];
    $school = $_POST['School'];
    $regno = $_POST['regno'];
    $address = $_POST['address'];
if($database){
    $collection = $database->selectCollection('students');

    // Check if username or email already exists
    $existingUser = $collection->findOne(['$or' => [['username' => $username], ['email' => $email]]]);

    if ($existingUser) {
        if ($existingUser['username'] == $username) {
            $error_uname = "Username already taken.";
        }
        if ($existingUser['email'] == $email) {
            $error_email = "Email already registered.";
        }
    } else {
        $insertResult = $collection->insertOne([
            'name' => $name,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'email' => $email,
            'phone' => $phone,
            'sem' => $sem,
            'school' => $school,
            'regno' => $regno,
            'address' => $address
        ]);

        if ($insertResult->isAcknowledged()) {
            $s_msg = "Student added successfully.";
        } else {
            $error_m = "Failed to add student. Please try again.";
        }
    }
}}
?>
