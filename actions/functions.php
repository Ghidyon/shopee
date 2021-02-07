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

print_r($cart->deleteItem(20));

// Insert data into cart table
// $arr = ['user_id' => 1, 'item_id' => 2];
// print_r($cart->insertIntoCart($arr));

/* function redirect($location) {
    $redirect = die(header('location:'.ROOT.$location)); // used to move to the specified location page
    return $redirect;
} */