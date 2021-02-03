<?php

// Class to fetch product data
class Product {

    // Property
    public $db = null;

    // Constructor with dependancy injection
    public function __construct(DBConnection $db) // (Class name & object type of the class)
    {
        // if database connection is not set, return null value
        if (!isset($db->con)) return null;
        // else assign value to $db property 
        $this->db = $db;
    }
}