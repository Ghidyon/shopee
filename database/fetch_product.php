<?php

// Class to fetch product data
class Product
{
    // Property
    public $db = null;

    // Constructor with dependancy injection
    public function __construct(DBConnection $db) // => (Class name & object type of the class)
    {
        // if database connection is not set, return null value
        if (!isset($db->con)) return null;
        // else assign value to $db property 
        $this->db = $db;
    }

    // Method to fetch product data
    public function getData($table = 'product')
    {
        // query database to fetch data
        $sql = "SELECT * FROM {$table}";
        $result = $this->db->con->query($sql);
        $data = [];

        // fetch product data one by one from the database
        // Using Object Oriented Style
        while ( $item = $result->fetch_array(MYSQLI_ASSOC) ) {
            // fetch individual product and push them into an array
            $data[] = $item;
        }
        return $data;
    }
}
