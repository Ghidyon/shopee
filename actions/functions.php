<?php

// require_once('./app.php');

// DBConnection Object -- create database connection
$db = new DBConnection();

// Product Object
$product = new Product($db);

// Fetch product data
print_r($product->getData());
