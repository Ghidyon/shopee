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
}
