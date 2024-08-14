<?php 
session_start();
use MongoDB\Exception\Exception as MongoDBException;
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}

include 'inc/header.php';
require '../components/db_connection.php';
if(isset($database)){



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
                        <span class="disabled">send Message to student</span>
                    </div>
                </div>
            </div>
            <div class="sendMessage">
                <form action="" method="post" name="form1" class="col-lg-6" enctype="multipart/form-data">
                    <table class="table table-bordered table-striped">
                    <?php
                        date_default_timezone_set("Asia/Dhaka");
                        $time= date("Y-m-d h:i:sa");

                        if (isset($_POST["submit"])) {
                            $title  = $_POST["title"];
                            $msg    = $_POST["msg"]; 
                            if ($title == "" || $msg == "") {
                                echo "<span style='color: red;'><b>Error !</b> Fields mustn't be empty</span>";
                            } else {
                                try {
                                    $collection = $database->selectCollection('Messages');
                                    $insertResult = $collection->insertOne([
                                        'sender' => $_SESSION['username'],
                                        'receiver' => $_POST['rusername'],
                                        'title' => $title,
                                        'message' => $msg,
                                        'status' => 'n',
                                        'timestamp' => $time
                                    ]);
                                    if ($insertResult->getInsertedCount() > 0) {
                                        echo "<span style='color: green; margin-bottom: 10px;'><b>Success !</b> Message sent successfully</span>";
                                    } else {
                                        echo "<span style='color: red; margin-bottom: 10px;'><b>Warning !</b> Message couldn't be sent</span>";
                                    }
                                } catch (MongoDBException $e) {
									/** @var \Throwable $e */
                                    echo "<span style='color: red; margin-bottom: 10px;'><b>Error !</b> Message couldn't be sent: " . $e->getMessage() . "</span>";
                                }
                            }    
                        }
                    ?>
                        <tr>
                            <td>
                              <select name="rusername" class="form-control">
                                <?php 
                                    $collection = $database->selectCollection('std_registration');
                                    $cursor = $collection->find();
                                    
                                    foreach ($cursor as $document) {
                                        ?><option value="<?php echo $document['username']; ?>">
                                        <?php  echo $document['username']; ?>
                                        </option><?php
                                    } 
                                ?>
                              </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="Enter title" name="title">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="msg" class="form-control" placeholder="Message here...."></textarea>
                            </td>
                        </tr>
                        <tr>
                    </table>
                    <input type="submit" name="submit" value="Send Message" class="btn btn-info">
                </form>
            </div>
        </div>                    
    </div>
</div>

<?php 
    include 'inc/footer.php';
                                }
?>
