<?php

namespace App\Controllers;

class HomeController
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getBlogs()
    {
        return $this->fetchData('blogs');
    }


    public function getFaqs()
    {
        return $this->fetchData('faqs');
    }

    public function getContacts()
    {
        return $this->fetchData('contacts');
    }

    public function getEvents()
    {
        return $this->fetchData('events');
    }
    
    public function getCarousels()
    {
        $query = "SELECT image, message, description, button_text, button_link FROM carousels";
        $data = [];
    
        if ($result = $this->connection->query($query)) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            error_log("Error fetching carousel data: " . $this->connection->error);
        }
    
        return $data;
    }
    

    private function fetchData($tableName)
    {
        $data = [];
        $query = "SELECT * FROM $tableName";

        if ($result = $this->connection->query($query)) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            error_log("Error fetching data from $tableName: " . $this->connection->error);
        }

        return $data;
    }
}
