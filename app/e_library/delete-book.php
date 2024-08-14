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

require '../components/db_connection.php'; // MongoDB connection

if(isset($client)){
$mongoClient=$client;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $collection_add_book = $mongoClient->library->add_book;

    // Delete the book with the given id
    $result = $collection_add_book->deleteOne(['id' => (int)$id]);

    ?>
    <script type="text/javascript">
        window.location = "display-books.php";
    </script>
    <?php
}}