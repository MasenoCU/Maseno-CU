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

require '../components/db_connection.php';
if (isset($_GET["id"]) && isset($client)) 
{
    $mongoClient = $client;
    $id = $_GET["id"];
    $collection_finezone = $mongoClient->library->finezone;

    // Delete the fine record with the given id
    $result = $collection_finezone->deleteOne(['id' => (int)$id]);

    ?>
    <script type="text/javascript">
        window.location = "fine.php";
    </script>
    <?php
}
?>
