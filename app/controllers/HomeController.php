<?php

namespace App\Controllers;

class HomeController
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getBlogs()
    {
        $collection = $this->database->selectCollection('blogs');
        return $collection->find()->toArray();
    }

    public function getAboutDetails()
    {
        $collection = $this->database->selectCollection('about');
        return $collection->find()->toArray();
    }

    public function getFaqs()
    {
        $collection = $this->database->selectCollection('faqs');
        return $collection->find()->toArray();
    }

    public function getContacts()
    {
        $collection = $this->database->selectCollection('contacts');
        return $collection->find()->toArray();
    }
}
