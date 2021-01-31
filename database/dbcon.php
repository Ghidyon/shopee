<?php

class DBConnection
{
    // Database Connection Properties
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "shopee";

    // Connection Property
    public $con = null;

    // Constructor Function Initializes Object Properties
    public function __construct()
    {
        // Create database connection
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        // Test database connection when it fails
        if ($this->con->connect_error) {
            die('Connection failed: ' . $this->con->connect_error);
        }
        echo ('Successful Connection!');
    }
}

$connect = new DBConnection();