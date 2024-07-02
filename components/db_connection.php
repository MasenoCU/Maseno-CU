<?php

require '../vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Exception\Exception as MongoDBException;

/**
 * MongoDB connection URI
 * @var string
 */
$uri = 'mongodb+srv://mucuweb:mucuweb@mucuproject.7vs9zpi.mongodb.net/?retryWrites=true&w=majority&appName=mucuproject';
$client = new Client($uri); //This is the new client to help connect to the server.

try {
//Connecting to the database
    $client = new Client($uri);
    $database = $client->selectDatabase('MUCUWEB');


    /**
     * The code below were used for testing
     * After succesfull testing commented.
     * This wil send a ping message to show a succesfull connection to the database
     * Is commented after pinging succesfully
     */
    //$collection =$database->selectCollection('testing');
    //   $document =[
    //    'name'=> 'Maseno University',
    //    'email'=> 'mucu@gmail.com',
    //    'created_at'=> new UTCDateTime()
    //];
    //$insertOneResult = $collection->insertOne($document);
    //printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    //var_dump($insertOneResult->getInsertedId());
    //$client->selectDatabase('admin')->command(['ping' => 1]);
    //echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (MongoDBException $e) {
    /** @var \Throwable $e */
    echo "Error: " . $e->getMessage() . "\n";
}
