<?php
require 'vendor/autoload.php';

use MongoDB\BSON\ObjectId;

// Create a new ObjectId instance
$id = new ObjectId();
echo $id;
