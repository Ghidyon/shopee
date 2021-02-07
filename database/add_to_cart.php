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

    // Method to get user_id and item_id, then insert into cart table in the database
    public function addToCart($user_id, $item_id)
    {
        // if user_id and item_id is set, create data array
        if ( isset($user_id) && isset($item_id) ) {
            $data_array = [
                "user_id" => $user_id,
                "item_id" => $item_id
            ];

            // Insert data array as paramater into insertIntoCart method, to insert data into cart table in database
            $result = $this->insertIntoCart($data_array);
            if ($result) {
                // reload page
                header('Location:'.$_SERVER['PHP_SELF']);
            }
        }
    }

    // Method to calculate subtotal of item prices in the cart
    public function getSum($arr)
    {
        // if array of prices is set, return sum of all prices
        if (isset($arr)) {
            $sum = 0;
            foreach($arr as $price) {
                $sum += floatval($price[0]); // floatval() converts a string/any value to a float(decimal) value
            }
            return sprintf('%.2f', $sum); // sprintf() returns a formatted string to a variable
            // '.2f' signifies that only 2 digits will appear after the decimal
        }
    }

    // Method to delete cart item using item_id
    public function deleteItem($item_id = null, $table = 'cart')
    {
        // If there's an item_id specified, query database and delete item
        if ($item_id != null) {
            // query database to delete data
            $sql = "DELETE FROM {$table} WHERE item_id = {$item_id}";
            $result = $this->db->con->query($sql);

            if ($result) {
                header('Location:'.$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}
