<?php

require __DIR__ . '/../../vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Exception\Exception as MongoDBException;

$database = null;
$client = null;

try {
    // Connecting to the database
    $uri = 'mongodb+srv://mucuweb:mucuweb@mucuproject.7vs9zpi.mongodb.net/?retryWrites=true&w=majority&appName=mucuproject';
    $client = new Client($uri);
    $database = $client->selectDatabase('MUCUWEB');
    //echo "Connected to the database successfully.";
} catch (MongoDBException $e) {
      /** @var \Throwable $e */
    echo "Error: " . $e->getMessage() . "\n";
    exit;
}

// Fetching the leaders data
$leaders = [];
if ($database) {
    $collection = $database->selectCollection('Leadership');
    $leadersCursor = $collection->find();
    $leaders = iterator_to_array($leadersCursor);
} else {
    echo "There is an error with the database";
}

// Fetching the FAQs
$faqs = [];
if ($database) {
    $collection = $database->selectCollection('FAQs');
    $faqsCursor = $collection->find();
    $faqs = iterator_to_array($faqsCursor);
} else {
    echo "Database connection error for FAQs";
}

// Fetching Contact details
$contacts = [];
if ($database) {
    $collection = $database->selectCollection('Contacts');
    $contactsCursor = $collection->find();
    $contacts = iterator_to_array($contactsCursor);
} else {
    echo "Database connection error for Contacts";
}

// Fetching events
$events = [];
if ($database) {
    $collection = $database->selectCollection('Events');
    $eventsCursor = $collection->find();
    $events = iterator_to_array($eventsCursor);
    //print_r($events);
} else {
    echo "Database connection error";
}

// Fetching blogs
$blogs = [];
if ($database) {
    $collection = $database->selectCollection('Blogs');
    $blogsCursor = $collection->find();
    $blogs = iterator_to_array($blogsCursor);
} else {
    echo "Connection error from the database.";
}

// Fetching about details
$aboutDetails = [];
if ($database) {
    $collection = $database->selectCollection('AboutUs');
    $aboutCursor = $collection->find();
    $aboutDetails = iterator_to_array($aboutCursor);
}
