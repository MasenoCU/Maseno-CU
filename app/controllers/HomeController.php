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
        $collection = $this->database->selectCollection('Blogs');
        return $collection->find()->toArray();
    }

    public function getAboutDetails()
    {
        $collection = $this->database->selectCollection('AboutUs');
        return $collection->find()->toArray();
    }

    public function getFaqs()
    {
        $collection = $this->database->selectCollection('FAQs');
        return $collection->find()->toArray();
    }

    public function getContacts()
    {
        $collection = $this->database->selectCollection('Contacts');
        return $collection->find()->toArray();
    }

    public function getEvents()
    {
        $collection = $this->database->selectCollection('Events');
        return $collection->find()->toArray();
    }
}
