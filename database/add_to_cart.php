<?php

// Class to add cart 
class Cart
{
    // Property
    public $db = null;

    // Constructor with dependancy injection
    public function __construct(DBConnection $db)
    {
        // If there's no database connection, return null
        if ( !isset($db->con) ) return null;
        // Else if database connection is set, assign database connection to class property
        $this->db = $db;
    }

    // Method to insert into cart table in database
    public function insertIntoCart($data_array = null, $table = 'cart')
    {
        // If there's a database connection,
        if ($this->db->con != null) {
            // If a parameter is set,
            if ($data_array != null) {
                // insert product details into the cart table
                // INSERT INTO cart (user_id, item_id) values (12, 11)

                // Get cart table column names from the array keys
                $columns = implode(",", array_keys($data_array)); // array_keys — Returns all the array keys and puts them in an indexed array
                
                $values = implode(",", array_values($data_array)); // array_values - Returns all the array values and puts them in an indexed array

                // create sql query
                $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table, $columns, $values);
                // printf - Outputs a formatted string
                // sprintf - Returns a formatted string

                // execute sql query
                $result = $this->db->con->query($sql);
                return $result;
            }
        }
    }

    // 
}
