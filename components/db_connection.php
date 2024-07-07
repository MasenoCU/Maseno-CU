<?php

require __DIR__ . '/../backend/vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Exception\Exception as MongoDBException;

$database = null;
$client = null;

try {
    // Connecting to the database
    $uri = getenv('MONGODB_URI');
    $client = new Client($uri);
    $database = $client->selectDatabase('MUCUWEB');
} catch (MongoDBException $e) {
  /** @var \Throwable $e */
    echo "Error: " . $e->getMessage() . "\n";
    exit;
}

