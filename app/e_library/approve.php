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

require '../components/db_connection.php';// MongoDB connection
if($database){
$id = $_GET["id"];

// Update the status to 'yes' in both collections
$std_collection = $database->selectCollection('std_registration');
$tch_collection = $database->selectCollection('t_registration');

// Update status for the student
$std_collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($id)],
    ['$set' => ['status' => 'yes']]
);

// Update status for the teacher
$tch_collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($id)],
    ['$set' => ['status' => 'yes']]
);

?>

<script type="text/javascript">
    window.location = "status.php";
</script>

<?php
// Fetch email from both collections
$student = $std_collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
$teacher = $tch_collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);

$email = '';
if ($student) {
    $email = $student['email'];
} elseif ($teacher) {
    $email = $teacher['email'];
}

if (!empty($email)) {
    $to = $email;
    $subject = "Account Confirmation";
    $message = "Your account is approved. Now you can log in to your account.";
    $headers = "From: parttimemail18@gmail.com";
    mail($to, $subject, $message, $headers);
}}
?>
