<?php

require __DIR__ . '/../../vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Exception\Exception as MongoDBException;

$database = null;
$client = null;

try {
    $uri = 'mongodb+srv://mucuweb:mucuweb@mucuproject.7vs9zpi.mongodb.net/?retryWrites=true&w=majority&appName=mucuproject';
    $client = new Client($uri);
    $database = $client->selectDatabase('MUCUWEB');
    //echo "Connected to the database successfully.";
} catch (MongoDBException $e) {
    /** @var \Throwable $e */
    error_log("Database connection error: " . $e->getMessage()); // Log error message
    exit('Database connection failed.');
}
function fetchCollectionData($database, $collectionName) {
    $data = [];
    try {
        $collection = $database->selectCollection($collectionName);
        $cursor = $collection->find();
        $data = iterator_to_array($cursor);
    } catch (MongoDBException $e) {
        /** @var \Throwable $e */
        error_log("Error fetching data from collection $collectionName: " . $e->getMessage()); // Log error message
    }
    return $data;
}

$leaders = fetchCollectionData($database, 'Leadership');
$faqs = fetchCollectionData($database, 'FAQs');
$contacts = fetchCollectionData($database, 'Contacts');
$events = fetchCollectionData($database, 'Events');
$blogs = fetchCollectionData($database, 'Blogs');
$aboutDetails = fetchCollectionData($database, 'AboutUs');


