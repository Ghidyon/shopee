<?php

// require_once('./app.php');

// DBConnection Object -- create database connection
$db = new DBConnection();

// Product Object
$product = new Product($db);

// Fetch product data
$product_array = $product->getData();

// Cart Object
$cart = new Cart($db);

// Insert data into cart table
// $arr = ['user_id' => 1, 'item_id' => 2];
// print_r($cart->insertIntoCart($arr));