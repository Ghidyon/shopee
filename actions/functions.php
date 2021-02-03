<?php

// include app.php file containing all important constants and MySQL scripts
require_once('./app.php');

// DBConnection Object
$db = new DBConnection();

// Product Object
$product = new Product($db);

