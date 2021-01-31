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

    // Constructor initializes Object Properties immediately class is called
    public function __construct()
    {
        // Create database connection
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        // End file loading when there is no database connection
        if ($this->con->connect_error) {
            die('Connection failed: ' . $this->con->connect_error);
        }
    }

    // Close Opened Database Connection
    protected function closeConnection()
    {
        if ($this->con !== null) {
            # close connection
            $this->con->close();
            $this->con = null;
        }
    }

    // Destructor is automatically called when object is not in use
    public function __destruct()
    {
        $this->closeConnection();
    }
}