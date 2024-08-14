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

if ((isset($_GET["id"])) && (isset($client))) {
    $id = (int)$_GET["id"];
    
    // Ensure $client is properly initialized in 'db_connection.php'
    $mongoClient = $client;
    
    $collection_issuebook = $mongoClient->library->t_issuebook;
    $collection_issue = $mongoClient->library->issue_book;

    // Delete from both collections
    $collection_issuebook->deleteOne(['id' => $id]);
    $collection_issue->deleteOne(['id' => $id]);
    
    ?>
    <script type="text/javascript">
        window.location = "issued-books.php";
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        window.location = "issued-books.php";
    </script>
    <?php
}
?>
