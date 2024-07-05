<?php

require __DIR__ . '/../backend/vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Exception\Exception as MongoDBException;

$database = null;
$client = null;

try {
    // Connecting to the database
    $uri = 'mongodb+srv://mucuweb:mucuweb@mucuproject.7vs9zpi.mongodb.net/?retryWrites=true&w=majority&appName=mucuproject';
    $client = new Client($uri);
    $database = $client->selectDatabase('MUCUWEB');
} catch (MongoDBException $e) {
  /** @var \Throwable $e */
    echo "Error: " . $e->getMessage() . "\n";
    exit;
}

