<?php 
session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}

include 'inc/header.php';
require '../components/db_connection.php';// Use MongoDB connection here
$rdate = date("d/m/Y", strtotime("+30 days"));
if ($database){
?>
<!--dashboard area-->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>dashboard</span>Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i>home</a>
                        <span class="disabled">student issue book</span>
                    </div>
                </div>
            </div>
            <div class="issueBook">
                <div class="row">
                    <div class="col-md-6">
                        <div class="issue-wrapper">
                            <form action="" class="form-control" method="post" name="reg">
                                <table class="table">
                                    <tr>
                                        <td class="">
                                            <select name="reg" id="" class="form-control">
                                                <?php
                                                // Fetch registration numbers from MongoDB
                                                $collection = $database->selectCollection('student_registration');
                                                $cursor = $collection->find([], ['projection' => ['regno' => 1]]);

                                                foreach ($cursor as $doc) {
                                                    echo "<option>";
                                                    echo $doc['regno'];
                                                    echo "</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="submit" class="btn btn-info" value="select" name="submit1">
                                        </td>
                                    </tr>
                                </table>
                                <?php 
                                if (isset($_POST["submit1"])) {
                                    // Fetch student details based on selected regno
                                    $studentData = $collection->findOne(['regno' => $_POST['reg']]);

                                    if ($studentData) {
                                        $name      = $studentData['name'];                    
                                        $username  = $studentData['username'];
                                        $sem       = $studentData['sem'];
                                        $dept      = $studentData['dept'];
                                        $session   = $studentData['session'];
                                        $email     = $studentData['email'];
                                        $phone     = $studentData['phone'];
                                        $regno     = $studentData['regno'];

                                        $_SESSION["regno"]     = $regno;
                                        $_SESSION["susername"] = $username;
                                    }
                                ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="regno" value="<?php echo $regno; ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="name" value="<?php echo $name; ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="sem" value="<?php echo $sem; ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="session" value="<?php echo $session; ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="mail" value="<?php echo $email; ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="booksname" class="form-control">
                                                <?php 
                                                // Fetch book names from MongoDB
                                                $bookCollection = $database->selectCollection('books');
                                                $bookCursor = $bookCollection->find([], ['projection' => ['books_name' => 1]]);

                                                foreach ($bookCursor as $book) {
                                                    echo "<option>";
                                                    echo $book['books_name'];
                                                    echo "</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="booksissuedate" value="<?php echo date("d/m/Y"); ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="text" class="form-control" name="username" value="<?php echo $username; ?>"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <input type="submit" name="submit2" class="btn btn-info" value="Issue Book"> 
                                        </td>
                                    </tr>
                                </table>
                                <?php
                                }

                                if (isset($_POST["submit2"])) {
                                    $bookData = $bookCollection->findOne(['books_name' => $_POST['booksname']]);

                                    if ($bookData && $bookData['books_availability'] == 0) {
                                        ?>
                                        <div class="alert alert-danger col-lg-6 col-lg-push-3">
                                            <strong>This book is not available.</strong>
                                        </div>
                                        <?php  
                                    } else {
                                        // Issue the book and decrease its availability
                                        $issueCollection = $database->selectCollection('issue_book');
                                        $issueCollection->insertOne([
                                            'regno' => $_SESSION['regno'],
                                            'name' => $_POST['name'],
                                            'sem' => $_POST['sem'],
                                            'session' => $_POST['session'],
                                            'phone' => $_POST['phone'],
                                            'mail' => $_POST['mail'],
                                            'booksname' => $_POST['booksname'],
                                            'booksissuedate' => $_POST['booksissuedate'],
                                            'booksreturndate' => $rdate,
                                            'username' => $_SESSION['susername']
                                        ]);

                                        $bookCollection->updateOne(
                                            ['books_name' => $_POST['booksname']],
                                            ['$inc' => ['books_availability' => -1]]
                                        );

                                        ?>
                                        <script type="text/javascript">
                                            alert("Book issued successfully");
                                            window.location.href=window.location.href;
                                        </script>
                                        <?php
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>                  
        </div>
    </div>
</div>

<?php 
include 'inc/footer.php';
                            }
?>
