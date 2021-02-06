<?php

// Class to fetch product data
class Product
{
    // Property
    public $db = null;

    // Constructor with dependancy injection
    public function __construct(DBConnection $db) // => __construct(Class name & object type of the class)
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

        // create empty array
        $data = [];

        // fetch product data one by one from the database
        // Using Object Oriented Style
        while ( $item = $result->fetch_array(MYSQLI_ASSOC) ) { // fetch a database row as an associative array
            // fetch individual product and push them into an array
            $data[] = $item;
        }
        return $data;
    }

    // Method to get product(s) from product table in the database using item_id
    public function getProduct($item_id = null, $table = 'product')
    {
        // Once item_id is set, query database and retrieve product(s)
        if (isset($item_id)) {
            // query database to fetch product data
            $sql = "SELECT * FROM {$table} WHERE item_id = {$item_id}";
            $result = $this->db->con->query($sql);

            // create empty array
            $data = [];
                    
            /* while ( $item = $result->fetch_array(MYSQLI_ASSOC) ) { 
                // fetch individual product and push them into data array
                $data[] = $item;
            } */

            // Using Object Oriented Style to fetch a database row as an associative array
            $item = $result->fetch_array(MYSQLI_ASSOC); // fetch a database row as an associative array
            $data[] = $item;
            return $data;
        }
    }
}
