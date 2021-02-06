<?php

    // Directory Navigation
    session_start(); // Start user session
    define('APP_ROOT', dirname(__FILE__)); // full directory path for the files
    define('DS', DIRECTORY_SEPARATOR); // for a default seperator in the user environment

    // folder handle
    define('SITE_NAME', 'Shopee - Mobile E-commerce Store');
    define('ROOT', '/shopee/'); // change to '/' when online

    // getting scripts for functionality
    require_once(APP_ROOT . DS . 'database' . DS . 'dbcon.php'); // MySQL database connection script
    require_once(APP_ROOT . DS . 'database' . DS . 'fetch_product.php'); // Fetch Product Class script
    require_once(APP_ROOT . DS . 'database' . DS . 'add_to_cart.php'); // Fetch Product Class script
    require_once(APP_ROOT . DS . 'actions' . DS . 'functions.php'); // functions script

?>