<?php 
require '../components/db_connection.php';



// MongoDB collections
if(isset($client)){
$id = $_GET["id"];
$stdCollection = $client->library->std_registration; // Replace 'library' with your database name
$tCollection = $client->library->t_registration;

// Update status in MongoDB
$stdCollection->updateOne(['_id' => new MongoDB\BSON\ObjectId($id)], ['$set' => ['status' => 'no']]);
$tCollection->updateOne(['_id' => new MongoDB\BSON\ObjectId($id)], ['$set' => ['status' => 'no']]);

?>
<script type="text/javascript">
    window.location = "status.php";
</script>
<?php 

// Fetch email from MongoDB
$stdResult = $stdCollection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
$tResult = $tCollection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

$email = "";
if ($stdResult) {
    $email = $stdResult['email'];
} elseif ($tResult) {
    $email = $tResult['email'];
}

// Prepare and send email
if ($email) {
    $to = $email;
    $subject = "Account Approve problem";
    $message = "We can't approve your account. It might be that your information is not correct. Please register with real information.<br>Thanks";
    $headers = "From: parttimemail18@gmail.com";
    mail($to, $subject, $message, $headers);
}}
?>
